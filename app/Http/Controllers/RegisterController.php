<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\RegisterVerifyOtpRequest;
use App\Models\Country;
use App\Models\Supplier;
use App\Models\User;
use App\Notifications\OtpNotification;
use App\Services\DomainNormalizationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function __construct(
        protected DomainNormalizationService $domainService,
    ) {
        //
    }

    /**
     * Show the registration form.
     */
    public function index(): View
    {
        return view('auth.register.index', [
            'countries' => Country::orderBy('name')->get(),
        ]);
    }

    /**
     * Handle registration submission and send OTP.
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Extract domain from email
        $domain = $this->domainService->extractDomain($validated['email']);

        if (! $domain) {
            return back()
                ->withErrors(['email' => 'Invalid email domain.'])
                ->withInput();
        }

        // Check if user already exists
        if (User::where('email', $validated['email'])->exists()) {
            return back()
                ->withErrors([
                    'email' => 'An account with this email already exists.',
                ])
                ->withInput();
        }

        // Generate OTP
        $otp = $this->generateOtp();
        $cacheKey = $this->getRegistrationOtpCacheKey($validated['email']);

        // Store OTP in cache with metadata (expires in 2 minutes)
        Cache::put(
            $cacheKey,
            [
                'otp' => $otp,
                'attempts' => 0,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'created_at' => now(),
            ],
            now()->addMinutes(2),
        );

        // Store registration data in session
        session([
            'registration_data' => [
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'backup_email' => $validated['backup_email'] ?? null,
                'country_id' => $validated['country_id'] ?? null,
                'domain' => $domain,
            ],
        ]);

        // Send OTP via notification
        try {
            Notification::route('mail', $validated['email'])->notify(
                new OtpNotification($otp),
            );

            return redirect()
                ->route('auth.register.verify')
                ->with(
                    'success',
                    'A verification code has been sent to your email.',
                );
        } catch (\Exception $e) {
            Log::error('Failed to send OTP', [
                'email' => $validated['email'],
                'error' => $e->getMessage(),
            ]);

            // Clean up cache
            Cache::forget($cacheKey);

            return back()
                ->withErrors([
                    'email' => 'Failed to send verification code. Please try again.',
                ])
                ->withInput();
        }
    }

    /**
     * Show the OTP verification form.
     */
    public function verify(): View|RedirectResponse
    {
        if (! session()->has('registration_data')) {
            return redirect()
                ->route('auth.register.index')
                ->with(
                    'error',
                    'Registration session expired. Please start again.',
                );
        }

        return view('auth.register.verify');
    }

    /**
     * Verify OTP and complete registration.
     */
    public function confirmOtp(
        RegisterVerifyOtpRequest $request,
    ): RedirectResponse {
        $validated = $request->validated();
        $registrationData = session('registration_data');

        if (! $registrationData) {
            return redirect()
                ->route('auth.register.index')
                ->with(
                    'error',
                    'Registration session expired. Please start again.',
                );
        }

        // Verify the email matches
        if ($validated['email'] !== $registrationData['email']) {
            return back()
                ->withErrors(['email' => 'Email does not match registration.'])
                ->withInput();
        }

        $cacheKey = $this->getRegistrationOtpCacheKey($validated['email']);
        $otpData = Cache::get($cacheKey);

        if (! $otpData) {
            return back()
                ->withErrors([
                    'otp' => 'Verification code has expired. Please request a new one.',
                ])
                ->withInput();
        }

        // Check max attempts (5 attempts)
        if ($otpData['attempts'] >= 5) {
            Cache::forget($cacheKey);

            return back()
                ->withErrors([
                    'otp' => 'Too many failed attempts. Please request a new code.',
                ])
                ->withInput();
        }

        // Verify origin (IP and User Agent should match)
        if (
            $otpData['ip'] !== $request->ip() ||
            $otpData['user_agent'] !== $request->userAgent()
        ) {
            // Increment attempts
            $otpData['attempts']++;
            Cache::put($cacheKey, $otpData, now()->addMinutes(2));

            return back()
                ->withErrors(['otp' => 'Invalid verification code.'])
                ->withInput();
        }

        // Verify OTP
        if ($otpData['otp'] !== $validated['otp']) {
            // Increment attempts
            $otpData['attempts']++;
            Cache::put($cacheKey, $otpData, now()->addMinutes(2));

            return back()
                ->withErrors(['otp' => 'Invalid verification code.'])
                ->withInput();
        }

        try {
            DB::beginTransaction();

            // Find or create supplier based on domain
            $supplier = Supplier::firstOrCreate(
                ['domain' => $registrationData['domain']],
                [
                    'name' => ucfirst(
                        str_replace(
                            ['.com', '.co.uk', '.org', '.net'],
                            '',
                            $registrationData['domain'],
                        ),
                    ),
                ],
            );

            // Create the user
            $user = User::create([
                'name' => $registrationData['first_name'].
                    ' '.
                    $registrationData['last_name'],
                'email' => $registrationData['email'],
                'backup_email' => $registrationData['backup_email'],
                'country_id' => $registrationData['country_id'] ?? null,
                'supplier_id' => $supplier->id,
                'email_verified_at' => now(),
                'password' => bcrypt(Str::random(16)),
            ]);

            DB::commit();

            // Clear registration session data and OTP cache
            session()->forget('registration_data');
            Cache::forget($cacheKey);

            // Log the user in
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()
                ->intended(route('dashboard'))
                ->with(
                    'success',
                    'Registration successful! Welcome to '.
                        config('app.name').
                        '.',
                );
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Registration failed', [
                'email' => $registrationData['email'],
                'error' => $e->getMessage(),
            ]);

            return back()
                ->withErrors([
                    'otp' => 'Registration failed. Please try again.',
                ])
                ->withInput();
        }
    }

    /**
     * Resend OTP code.
     */
    public function resendOtp(): RedirectResponse
    {
        $registrationData = session('registration_data');

        if (! $registrationData) {
            return redirect()
                ->route('auth.register.index')
                ->with(
                    'error',
                    'Registration session expired. Please start again.',
                );
        }

        $email = $registrationData['email'];
        $cacheKey = $this->getRegistrationOtpCacheKey($email);

        // Check rate limiting (prevent spamming)
        $rateLimitKey = "otp_resend:{$email}";
        if (Cache::has($rateLimitKey)) {
            return back()->with(
                'error',
                'Please wait before requesting another code.',
            );
        }

        // Generate new OTP
        $otp = $this->generateOtp();

        // Store OTP in cache (expires in 2 minutes)
        Cache::put(
            $cacheKey,
            [
                'otp' => $otp,
                'attempts' => 0,
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'created_at' => now(),
            ],
            now()->addMinutes(2),
        );

        // Set rate limit (30 seconds)
        Cache::put($rateLimitKey, true, now()->addSeconds(30));

        try {
            Notification::route('mail', $email)->notify(
                new OtpNotification($otp),
            );

            return back()->with(
                'success',
                'A new verification code has been sent to your email.',
            );
        } catch (\Exception $e) {
            Log::error('Failed to resend OTP', [
                'email' => $email,
                'error' => $e->getMessage(),
            ]);

            return back()->with(
                'error',
                'Failed to resend verification code. Please try again.',
            );
        }
    }

    /**
     * Generate a random 6-digit OTP.
     */
    protected function generateOtp(): string
    {
        return str_pad(
            (string) random_int(100000, 999999),
            6,
            '0',
            STR_PAD_LEFT,
        );
    }

    /**
     * Get the cache key for registration OTP.
     */
    protected function getRegistrationOtpCacheKey(string $email): string
    {
        return 'registration_otp:'.hash('sha256', strtolower($email));
    }
}

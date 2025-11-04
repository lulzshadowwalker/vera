<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\VerifyOtpRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function index(): View
    {
        return view('auth.login.index');
    }

    /**
     * Handle login submission and send OTP.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $user = User::where('email', $validated['email'])->first();

        if (! $user) {
            return back()
                ->withErrors(['email' => 'No account found with this email address.'])
                ->withInput();
        }

        // Store email in session for OTP verification
        session(['login_email' => $validated['email']]);

        try {
            // Send OTP
            $user->sendOneTimePassword();

            return redirect()
                ->route('auth.login.verify')
                ->with('success', 'A verification code has been sent to your email.');
        } catch (\Exception $e) {
            Log::error('Failed to send OTP', [
                'email' => $validated['email'],
                'error' => $e->getMessage(),
            ]);

            return back()
                ->withErrors(['email' => 'Failed to send verification code. Please try again.'])
                ->withInput();
        }
    }

    /**
     * Show the OTP verification form.
     */
    public function verify(): View|RedirectResponse
    {
        if (! session()->has('login_email')) {
            return redirect()
                ->route('auth.login.index')
                ->with('error', 'Login session expired. Please start again.');
        }

        return view('auth.login.verify');
    }

    /**
     * Verify OTP and log in the user.
     */
    public function confirmOtp(VerifyOtpRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $loginEmail = session('login_email');

        if (! $loginEmail || $loginEmail !== $validated['email']) {
            return redirect()
                ->route('auth.login.index')
                ->with('error', 'Login session expired. Please start again.');
        }

        $user = User::where('email', $validated['email'])->first();

        if (! $user) {
            return redirect()
                ->route('auth.login.index')
                ->withErrors(['email' => 'User not found.']);
        }

        $result = $user->attemptLoginUsingOneTimePassword($validated['otp']);

        if (! $result->isOk()) {
            return back()
                ->withErrors(['otp' => $result->validationMessage()])
                ->withInput();
        }

        // Clear login session data
        session()->forget('login_email');

        // Regenerate session
        $request->session()->regenerate();

        return redirect()
            ->intended(route('dashboard'))
            ->with('success', 'Welcome back!');
    }

    /**
     * Resend OTP code.
     */
    public function resendOtp(): RedirectResponse
    {
        $loginEmail = session('login_email');

        if (! $loginEmail) {
            return redirect()
                ->route('auth.login.index')
                ->with('error', 'Login session expired. Please start again.');
        }

        $user = User::where('email', $loginEmail)->first();

        if (! $user) {
            return redirect()
                ->route('auth.login.index')
                ->with('error', 'User not found.');
        }

        try {
            $user->sendOneTimePassword();

            return back()
                ->with('success', 'A new verification code has been sent to your email.');
        } catch (\Exception $e) {
            Log::error('Failed to resend OTP', [
                'email' => $loginEmail,
                'error' => $e->getMessage(),
            ]);

            return back()
                ->with('error', 'Failed to resend verification code. Please try again.');
        }
    }

    /**
     * Log out the user.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('home.index')
            ->with('success', 'You have been logged out.');
    }
}

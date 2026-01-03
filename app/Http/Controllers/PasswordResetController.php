<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\Auth\ResetPasswordNotification;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PasswordResetController extends Controller
{
    /**
     * Display the form to request a password reset link.
     */
    public function create(): View
    {
        return view('auth.passwords.email');
    }

    /**
     * Handle an incoming password reset link request.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // Find user by email or backup_email
        $user = User::where('email', $request->email)
            ->orWhere('backup_email', $request->email)
            ->first();

        if ($user) {
            // Send reset link to the requested email (primary or backup)
            // We use the primary email for the token link so validation works
            $token = Password::broker()->createToken($user);
            
            Notification::route('mail', $request->email)
                ->notify(new ResetPasswordNotification($token, $user->email));
                
            $status = Password::RESET_LINK_SENT;
        } else {
            // Simulate success to prevent user enumeration
            $status = Password::RESET_LINK_SENT;
        }

        return back()->with('success', __($status));
    }

    /**
     * Display the password reset view for the given token.
     */
    public function edit(Request $request): View
    {
        return view('auth.passwords.reset', ['token' => $request->route('token'), 'email' => $request->email]);
    }

    /**
     * Handle an incoming new password request.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('auth.login.index')->with('success', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}

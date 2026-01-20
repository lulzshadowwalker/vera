<?php

namespace App\Notifications\Auth;

use Illuminate\Auth\Notifications\ResetPassword;

class ResetPasswordNotification extends ResetPassword
{
    /**
     * Create a notification instance.
     *
     * @param  string  $token
     */
    public function __construct(#[\SensitiveParameter] $token, public string $emailForLink)
    {
        parent::__construct($token);
    }

    /**
     * Get the reset URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    protected function resetUrl($notifiable)
    {
        // We ignore the notifiable's email and use the explicitly provided email
        // This ensures the link works even if sent to a backup email (via AnonymousNotifiable)
        return url(route('password.reset', [
            'token' => $this->token,
            'email' => $this->emailForLink,
        ], false));
    }
}

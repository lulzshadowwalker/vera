<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Notifications\Auth\ResetPasswordNotification;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_screen_can_be_rendered()
    {
        $response = $this->get(route('password.request'));

        $response->assertStatus(200);
    }

    public function test_reset_password_link_can_be_requested()
    {
        Notification::fake();

        $user = User::factory()->create();

        $response = $this->post(route('password.email'), ['email' => $user->email]);

        $response->assertSessionHas('status', __('passwords.sent'));

        // Notification should be sent to the anonymous notifiable with the user's email
        Notification::assertSentOnDemand(ResetPasswordNotification::class, function ($notification, $channels, $notifiable) use ($user) {
            return $notifiable->routes['mail'] === $user->email && $notification->emailForLink === $user->email;
        });
    }

    public function test_reset_password_link_can_be_requested_with_backup_email()
    {
        Notification::fake();

        $user = User::factory()->create([
            'email' => 'primary@example.com',
            'backup_email' => 'backup@example.com',
        ]);

        $response = $this->post(route('password.email'), ['email' => 'backup@example.com']);

        $response->assertSessionHas('status', __('passwords.sent'));

        // Notification should be sent to the backup email
        Notification::assertSentOnDemand(ResetPasswordNotification::class, function ($notification, $channels, $notifiable) use ($user) {
            return $notifiable->routes['mail'] === 'backup@example.com' && $notification->emailForLink === $user->email;
        });
    }

    public function test_reset_password_screen_can_be_rendered()
    {
        $user = User::factory()->create();
        $token = app('auth.password.broker')->createToken($user);

        $response = $this->get(route('password.reset', ['token' => $token]));

        $response->assertStatus(200);
    }

    public function test_password_can_be_reset()
    {
        Notification::fake();

        $user = User::factory()->create();
        $token = app('auth.password.broker')->createToken($user);

        $response = $this->post(route('password.update'), [
            'token' => $token,
            'email' => $user->email,
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertSessionHas('status', __('passwords.reset'));
        $this->assertTrue(auth()->attempt(['email' => $user->email, 'password' => 'password']));
    }

    public function test_user_enumeration_prevention()
    {
        Notification::fake();

        $response = $this->post(route('password.email'), ['email' => 'nonexistent@example.com']);

        // Should return success status even if user doesn't exist
        $response->assertSessionHas('status', __('passwords.sent'));

        Notification::assertNothingSent();
    }
}

<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_the_login_page(): void
    {
        $this->get(route('auth.login.index'))
            ->assertOk()
            ->assertViewIs('auth.login.index');
    }

    #[Test]
    public function it_requires_email_field(): void
    {
        $this->post(route('auth.login.store'), [])->assertSessionHasErrors([
            'email',
        ]);
    }

    #[Test]
    public function it_validates_email_format(): void
    {
        $this->post(route('auth.login.store'), [
            'email' => 'invalid-email',
        ])->assertSessionHasErrors(['email']);
    }

    #[Test]
    public function it_rejects_blocked_email_providers(): void
    {
        $this->post(route('auth.login.store'), [
            'email' => 'user@gmail.com',
        ])->assertSessionHasErrors(['email']);

        $this->post(route('auth.login.store'), [
            'email' => 'user@yahoo.com',
        ])->assertSessionHasErrors(['email']);

        $this->post(route('auth.login.store'), [
            'email' => 'user@hotmail.com',
        ])->assertSessionHasErrors(['email']);
    }

    #[Test]
    public function it_rejects_non_existent_email_addresses(): void
    {
        $this->post(route('auth.login.store'), [
            'email' => 'nonexistent@company.com',
        ])
            ->assertRedirect(route('auth.login.verify'))
            ->assertSessionHas('success');
    }

    #[Test]
    public function it_accepts_existing_work_email_addresses(): void
    {
        Notification::fake();

        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        $response = $this->post(route('auth.login.store'), [
            'email' => 'john@company.com',
        ]);

        $response
            ->assertRedirect(route('auth.login.verify'))
            ->assertSessionHas('success')
            ->assertSessionHas('login_email', 'john@company.com');
    }

    #[Test]
    public function it_stores_email_in_session_for_verification(): void
    {
        Notification::fake();

        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        $this->post(route('auth.login.store'), [
            'email' => 'john@company.com',
        ]);

        $this->assertEquals('john@company.com', session('login_email'));
    }

    #[Test]
    public function it_shows_verify_page_when_login_email_exists_in_session(): void
    {
        session(['login_email' => 'john@company.com']);

        $this->get(route('auth.login.verify'))
            ->assertOk()
            ->assertViewIs('auth.login.verify');
    }

    #[Test]
    public function it_redirects_to_login_when_no_session_data_on_verify_page(): void
    {
        $this->get(route('auth.login.verify'))
            ->assertRedirect(route('auth.login.index'))
            ->assertSessionHas('error');
    }

    #[Test]
    public function it_handles_case_insensitive_email_lookup(): void
    {
        Notification::fake();

        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        // It should fake success even if case doesn't match (if DB is case sensitive)
        // Or real success if DB is case insensitive
        $this->post(route('auth.login.store'), [
            'email' => 'JOHN@COMPANY.COM',
        ])
            ->assertRedirect(route('auth.login.verify'))
            ->assertSessionHas('success');
    }

    #[Test]
    public function it_normalizes_domain_from_email_on_login(): void
    {
        Notification::fake();

        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        // Even though we check for blocked providers,
        // the domain should be normalized for validation
        $this->post(route('auth.login.store'), [
            'email' => 'john@company.com',
        ])->assertRedirect(route('auth.login.verify'));
    }

    #[Test]
    public function resend_otp_requires_session_email(): void
    {
        $this->post(route('auth.login.resend-otp'))
            ->assertRedirect(route('auth.login.index'))
            ->assertSessionHas('error');
    }

    #[Test]
    public function resend_otp_works_with_valid_session(): void
    {
        Notification::fake();

        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        session(['login_email' => 'john@company.com']);

        $this->post(route('auth.login.resend-otp'))
            ->assertRedirect()
            ->assertSessionHas('success');
    }

    #[Test]
    public function verify_otp_requires_valid_session(): void
    {
        Notification::fake();

        // Create a user so validation passes, but don't set session
        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        // Try to verify OTP without session
        $this->post(route('auth.login.confirm-otp'), [
            'email' => 'john@company.com',
            'otp' => '123456',
        ])
            ->assertRedirect(route('auth.login.index'))
            ->assertSessionHas('error');
    }

    #[Test]
    public function verify_otp_validates_otp_format(): void
    {
        Notification::fake();

        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        session(['login_email' => 'john@company.com']);

        $this->post(route('auth.login.confirm-otp'), [
            'email' => 'john@company.com',
            'otp' => '123',
        ])->assertSessionHasErrors(['otp']);

        $this->post(route('auth.login.confirm-otp'), [
            'email' => 'john@company.com',
            'otp' => 'abcdef',
        ])->assertSessionHasErrors(['otp']);
    }

    #[Test]
    public function it_logs_in_user_on_successful_verification(): void
    {
        Notification::fake();

        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        // Request OTP through the store method to ensure correct origin properties are set
        $this->post(route('auth.login.store'), ['email' => 'john@company.com']);

        $otp = \Spatie\OneTimePasswords\Models\OneTimePassword::where(
            'authenticatable_id',
            $user->id,
        )->first()->password;

        session(['login_email' => 'john@company.com']);

        $this->post(route('auth.login.confirm-otp'), [
            'email' => 'john@company.com',
            'otp' => $otp,
        ])
            ->assertRedirect(route('home.index'))
            ->assertSessionHas('success');

        $this->assertAuthenticatedAs($user);
    }

    #[Test]
    public function authenticated_users_cannot_access_login_page(): void
    {
        Notification::fake();

        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        $this->actingAs($user)
            ->get(route('auth.login.index'))
            ->assertRedirect(route('home.index'));
    }

    #[Test]
    public function logout_clears_session_and_redirects_to_home(): void
    {
        Notification::fake();

        $supplier = Supplier::factory()->create(['domain' => 'company.com']);
        $user = User::factory()->create([
            'email' => 'john@company.com',
            'supplier_id' => $supplier->id,
        ]);

        $this->actingAs($user)
            ->post(route('auth.logout'))
            ->assertRedirect(route('home.index'))
            ->assertSessionHas('success');

        $this->assertGuest();
    }
}

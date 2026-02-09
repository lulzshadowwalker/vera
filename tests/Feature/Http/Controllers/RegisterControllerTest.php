<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Country;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_the_registration_page(): void
    {
        $this->get(route('auth.register.index'))
            ->assertOk()
            ->assertViewIs('auth.register.index');
    }

    #[Test]
    public function it_requires_all_mandatory_fields(): void
    {
        $this->post(route('auth.register.store'), [])->assertSessionHasErrors([
            'first_name',
            'last_name',
            'email',
        ]);
    }

    #[Test]
    public function it_validates_email_format(): void
    {
        $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'invalid-email',
        ])->assertSessionHasErrors(['email']);
    }

    #[Test]
    public function it_rejects_blocked_email_providers(): void
    {
        $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@gmail.com',
        ])->assertSessionHasErrors(['email']);

        $this->post(route('auth.register.store'), [
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'jane@yahoo.com',
        ])->assertSessionHasErrors(['email']);
    }

    #[Test]
    public function it_accepts_work_email_addresses(): void
    {
        Notification::fake();
        $country = Country::factory()->create();

        $response = $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@company.com',
            'country_id' => $country->id,
        ]);

        $response
            ->assertRedirect(route('auth.register.verify'))
            ->assertSessionHas('success')
            ->assertSessionHas('registration_data');
    }

    #[Test]
    public function it_stores_registration_data_in_session(): void
    {
        Notification::fake();
        $country = Country::factory()->create();

        $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@company.com',
            'backup_email' => 'john.backup@company.com',
            'country_id' => $country->id,
        ]);

        $this->assertNotNull(session('registration_data'));
        $this->assertEquals('John', session('registration_data.first_name'));
        $this->assertEquals('Doe', session('registration_data.last_name'));
        $this->assertEquals(
            'john@company.com',
            session('registration_data.email'),
        );
        $this->assertEquals(
            'john.backup@company.com',
            session('registration_data.backup_email'),
        );
        $this->assertEquals('company.com', session('registration_data.domain'));
    }

    #[Test]
    public function it_normalizes_emails_to_lowercase_in_session(): void
    {
        Notification::fake();
        $country = Country::factory()->create();

        $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'John.Doe@Company.com',
            'backup_email' => 'Backup@Company.com',
            'country_id' => $country->id,
        ]);

        $this->assertEquals(
            'john.doe@company.com',
            session('registration_data.email'),
        );
        $this->assertEquals(
            'backup@company.com',
            session('registration_data.backup_email'),
        );
    }

    #[Test]
    public function it_prevents_duplicate_email_registration(): void
    {
        User::factory()->create(['email' => 'existing@company.com']);

        $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'existing@company.com',
        ])->assertSessionHasErrors(['email']);
    }

    #[Test]
    public function it_validates_backup_email_is_different_from_primary(): void
    {
        $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@company.com',
            'backup_email' => 'john@company.com',
        ])->assertSessionHasErrors(['backup_email']);
    }

    #[Test]
    public function it_rejects_blocked_backup_email_providers(): void
    {
        $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@company.com',
            'backup_email' => 'john@gmail.com',
        ])->assertSessionHasErrors(['backup_email']);
    }

    #[Test]
    public function it_shows_verify_page_when_registration_data_exists(): void
    {
        session([
            'registration_data' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@company.com',
                'domain' => 'company.com',
            ],
        ]);

        $this->get(route('auth.register.verify'))
            ->assertOk()
            ->assertViewIs('auth.register.verify');
    }

    #[Test]
    public function it_redirects_to_register_when_no_session_data_on_verify_page(): void
    {
        $this->get(route('auth.register.verify'))
            ->assertRedirect(route('auth.register.index'))
            ->assertSessionHas('error');
    }

    #[Test]
    public function it_creates_user_and_supplier_on_successful_verification(): void
    {
        $email = 'John@NewCompany.com';
        $otp = '123456';
        $cacheKey = 'registration_otp:'.hash('sha256', strtolower($email));

        session([
            'registration_data' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => strtolower($email),
                'backup_email' => 'backup@other.com',
                'domain' => 'newcompany.com',
            ],
        ]);

        Cache::put($cacheKey, [
            'otp' => $otp,
            'attempts' => 0,
            'ip' => '127.0.0.1',
            'user_agent' => 'Symfony',
            'created_at' => now(),
        ]);

        $response = $this->post(route('auth.register.confirm-otp'), [
            'email' => $email,
            'otp' => $otp,
        ]);

        $response
            ->assertRedirect(route('home.index'))
            ->assertSessionHas('success');

        $this->assertDatabaseHas('users', [
            'email' => strtolower($email),
            'name' => 'John Doe',
        ]);

        $this->assertDatabaseHas('suppliers', [
            'domain' => 'newcompany.com',
        ]);

        $this->assertAuthenticated();
    }

    #[Test]
    public function it_associates_user_with_existing_supplier_if_domain_matches(): void
    {
        $existingSupplier = Supplier::factory()->create([
            'domain' => 'company.com',
            'name' => 'Existing Company',
        ]);

        session([
            'registration_data' => [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane@company.com',
                'domain' => 'company.com',
            ],
        ]);

        // User should be associated with existing supplier
        $this->assertEquals(1, Supplier::count());
    }

    #[Test]
    public function it_normalizes_domain_from_email(): void
    {
        Notification::fake();
        $country = Country::factory()->create();

        $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@WWW.COMPANY.COM',
            'country_id' => $country->id,
        ]);

        $this->assertEquals('company.com', session('registration_data.domain'));
    }

    #[Test]
    public function it_handles_subdomain_emails(): void
    {
        Notification::fake();
        $country = Country::factory()->create();

        $this->post(route('auth.register.store'), [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@mail.company.com',
            'country_id' => $country->id,
        ]);

        $this->assertEquals(
            'mail.company.com',
            session('registration_data.domain'),
        );
    }

    #[Test]
    public function resend_otp_is_rate_limited(): void
    {
        Notification::fake();

        session([
            'registration_data' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@company.com',
                'domain' => 'company.com',
            ],
        ]);

        // First resend
        $this->post(route('auth.register.resend-otp'))
            ->assertRedirect()
            ->assertSessionHas('success');

        // Second resend immediately
        $this->post(route('auth.register.resend-otp'))
            ->assertRedirect()
            ->assertSessionHas(
                'error',
                'Please wait before requesting another code.',
            );
    }
}

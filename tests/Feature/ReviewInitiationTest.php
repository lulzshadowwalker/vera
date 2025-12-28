<?php

namespace Tests\Feature;

use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ReviewInitiationTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_redirects_to_existing_supplier_review_page()
    {
        $user = User::factory()->create();
        $supplier = Supplier::factory()->create(['domain' => 'example.com']);

        $response = $this->actingAs($user)
            ->post(route('reviews.initiate'), [
                'domain' => 'example.com',
            ]);

        $response->assertRedirect(route('suppliers.reviews.create', $supplier));
    }

    #[Test]
    public function it_creates_new_supplier_and_redirects_if_not_exists()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post(route('reviews.initiate'), [
                'domain' => 'new-supplier.com',
            ]);

        $this->assertDatabaseHas('suppliers', [
            'domain' => 'new-supplier.com',
            'name' => 'new-supplier.com',
        ]);

        $supplier = Supplier::where('domain', 'new-supplier.com')->first();
        $response->assertRedirect(route('suppliers.reviews.create', $supplier));
    }

    #[Test]
    public function it_normalizes_domain_before_searching_or_creating()
    {
        $user = User::factory()->create();
        $supplier = Supplier::factory()->create(['domain' => 'example.com']);

        $response = $this->actingAs($user)
            ->post(route('reviews.initiate'), [
                'domain' => 'https://www.Example.com/',
            ]);

        $response->assertRedirect(route('suppliers.reviews.create', $supplier));
    }

    #[Test]
    public function it_validates_domain_input()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post(route('reviews.initiate'), [
                'domain' => 'invalid-domain',
            ]);

        $response->assertSessionHasErrors('domain');
    }

    #[Test]
    public function it_requires_authentication()
    {
        $response = $this->post(route('reviews.initiate'), [
            'domain' => 'example.com',
        ]);

        $response->assertRedirect(route('auth.login.index')); // Assuming standard auth redirect, checking routes/web.php it might be different but usually it's login
    }
}

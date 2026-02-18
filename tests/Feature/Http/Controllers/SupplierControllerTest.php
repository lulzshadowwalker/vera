<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SupplierController
 */
final class SupplierControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function index_displays_view(): void
    {
        Supplier::factory()->count(3)->create();

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('suppliers.index'));

        $response->assertOk();
        $response->assertViewIs('supplier.index');
        $response->assertViewHas('suppliers');
    }

    #[Test]
    public function show_displays_view(): void
    {
        $supplier = Supplier::factory()->create();
        Review::factory()->create([
            'reviewed_supplier_id' => $supplier->id,
        ]);

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('suppliers.show', $supplier));

        $response->assertOk();
        $response->assertViewIs('supplier.show');
        $response->assertViewHas('supplier');
        $response->assertViewHas('reviews');
    }

    #[Test]
    public function index_handles_search_query(): void
    {
        Supplier::factory()->create(['name' => 'Searchable Supplier']);
        Supplier::factory()->create(['name' => 'Other Supplier']);

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(
            route('suppliers.index', ['search' => 'Searchable']),
        );

        $response->assertOk();
        $response->assertViewIs('supplier.index');
        $response->assertViewHas('suppliers');
    }

    #[Test]
    public function show_paginated_reviews(): void
    {
        $supplier = Supplier::factory()->create();
        Review::factory()
            ->count(15)
            ->create([
                'reviewed_supplier_id' => $supplier->id,
            ]);

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('suppliers.show', $supplier));

        $response->assertOk();
        $response->assertViewHas('reviews', function ($reviews) {
            return $reviews instanceof \Illuminate\Pagination\LengthAwarePaginator;
        });
    }

    #[Test]
    public function guest_can_access_show_and_only_see_limited_vendor_information(): void
    {
        $supplier = Supplier::factory()->create([
            'name' => 'Public Vendor',
            'domain' => 'public-vendor.test',
        ]);
        Review::factory()->create([
            'reviewed_supplier_id' => $supplier->id,
            'comment' => 'Paid review detail should not be visible to guests.',
        ]);

        $response = $this->get(route('suppliers.show', $supplier));

        $response->assertOk();
        $response->assertSee('Public Vendor');
        $response->assertSee('public-vendor.test');
        $response->assertSee('1 assessment');
        $response->assertSee('Join our community to see more');
        $response->assertDontSee('Rating Distribution');
        $response->assertDontSee('Paid review detail should not be visible to guests.');
        $response->assertDontSee('Loading more assessments...');
    }

    #[Test]
    public function guest_cannot_access_index(): void
    {
        $response = $this->get(route('suppliers.index'));

        $response->assertRedirect(route('auth.login.index'));
    }

    #[Test]
    public function authenticated_user_can_see_paid_vendor_details(): void
    {
        $supplier = Supplier::factory()->create();
        Review::factory()->create([
            'reviewed_supplier_id' => $supplier->id,
            'anonymous' => false,
            'comment' => 'Detailed paid review content',
        ]);
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('suppliers.show', $supplier));

        $response->assertOk();
        $response->assertSee('Rating Distribution');
        $response->assertSee('Detailed paid review content');
    }

    #[Test]
    public function index_renders_hero_style_search_markup(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('suppliers.index'));

        $response->assertOk();
        $response->assertSee("placeholder=\"Seek by vendor's domain\"", false);
        $response->assertSee('x-data="{ value:', false);
        $response->assertSee('font-black', false);
        $response->assertSee('x-model="value"', false);
    }
}

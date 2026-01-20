<?php

namespace Tests\Feature\Http\Controllers;

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
        \App\Models\Review::factory()->create([
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
        \App\Models\Review::factory()
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
}

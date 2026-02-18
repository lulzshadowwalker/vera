<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_the_home_page(): void
    {
        $this->get(route('home.index'))
            ->assertOk()
            ->assertViewIs('home.index');
    }

    #[Test]
    public function it_counts_only_suppliers_with_users_for_registered_companies(): void
    {
        Cache::flush();

        $withUsers = Supplier::factory()->count(2)->create();
        Supplier::factory()->create();

        User::factory()->create(['supplier_id' => $withUsers->first()->id]);
        User::factory()->create(['supplier_id' => $withUsers->last()->id]);

        $this->get(route('home.index'))
            ->assertOk()
            ->assertViewHas('suppliersCount', 10_000 + 2);
    }

    #[Test]
    public function it_counts_distinct_assessed_companies(): void
    {
        Cache::flush();

        $reviewedSupplierA = Supplier::factory()->create();
        $reviewedSupplierB = Supplier::factory()->create();

        Review::factory()->create(['reviewed_supplier_id' => $reviewedSupplierA->id]);
        Review::factory()->create(['reviewed_supplier_id' => $reviewedSupplierA->id]);
        Review::factory()->create(['reviewed_supplier_id' => $reviewedSupplierB->id]);

        $this->get(route('home.index'))
            ->assertOk()
            ->assertViewHas('assessedCompaniesCount', 7_500 + 2);
    }
}

<?php

namespace Tests\Unit;

use App\Models\Review;
use App\Models\Supplier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SupplierTest extends TestCase
{
    use RefreshDatabase;

    public function test_average_rating_is_normalized_to_five_stars(): void
    {
        $supplier = Supplier::factory()->create();

        // Create a review with perfect scores (10/10)
        Review::factory()->create([
            'reviewed_supplier_id' => $supplier->id,
            'quality' => 10,
            'accuracy' => 10,
            'communication' => 10,
            'cost' => 10,
            'compliance' => 10,
            'timeliness' => 10,
            'support' => 10,
        ]);

        // 10/10 average should be normalized to 5 stars
        $this->assertEquals(5.0, $supplier->average_rating);

        // Create another review with half scores (5/10)
        Review::factory()->create([
            'reviewed_supplier_id' => $supplier->id,
            'quality' => 5,
            'accuracy' => 5,
            'communication' => 5,
            'cost' => 5,
            'compliance' => 5,
            'timeliness' => 5,
            'support' => 5,
        ]);

        // (10 + 5) / 2 = 7.5 average score out of 10
        // Normalized to 5 stars: 7.5 / 2 = 3.75 -> rounded to 1 decimal = 3.8
        $this->assertEquals(3.8, $supplier->fresh()->average_rating);
    }

    public function test_rating_distribution_percentage(): void
    {
        $supplier = Supplier::factory()->create();

        // 5 Star Review (10/10)
        Review::factory()->create([
            'reviewed_supplier_id' => $supplier->id,
            'quality' => 10, 'accuracy' => 10, 'communication' => 10, 'cost' => 10, 'compliance' => 10, 'timeliness' => 10, 'support' => 10,
        ]);

        // 4 Star Review (8/10)
        Review::factory()->create([
            'reviewed_supplier_id' => $supplier->id,
            'quality' => 8, 'accuracy' => 8, 'communication' => 8, 'cost' => 8, 'compliance' => 8, 'timeliness' => 8, 'support' => 8,
        ]);

        // 1 Star Review (2/10)
        Review::factory()->create([
            'reviewed_supplier_id' => $supplier->id,
            'quality' => 2, 'accuracy' => 2, 'communication' => 2, 'cost' => 2, 'compliance' => 2, 'timeliness' => 2, 'support' => 2,
        ]);

        // 3 reviews total.
        // 5 stars: 1/3 = 33%
        // 4 stars: 1/3 = 33%
        // 1 star: 1/3 = 33%
        // 3 stars: 0%
        // 2 stars: 0%

        $this->assertEquals(33, $supplier->getRatingPercentage(5));
        $this->assertEquals(33, $supplier->getRatingPercentage(4));
        $this->assertEquals(33, $supplier->getRatingPercentage(1));
        $this->assertEquals(0, $supplier->getRatingPercentage(3));
        $this->assertEquals(0, $supplier->getRatingPercentage(2));
    }
}

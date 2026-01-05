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
}

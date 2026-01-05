<?php

namespace Tests\Unit\Models;

use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    use RefreshDatabase;

    public function test_review_display_name_displays_anonymous_for_anonymous_reviews(): void
    {
        $review = Review::factory()->create([
            'anonymous' => true,
        ]);

        $this->assertEquals('Anonymous', $review->reviewer_display_name);
    }

    public function test_review_display_name_displays_correct_name_for_non_anonymous_reviews(): void
    {
        $supplier = Supplier::factory()->create([
            'name' => 'Acme Corp',
        ]);

        $user = User::factory()->for($supplier)->create([
            'name' => 'John Doe',
        ]);

        $review = Review::factory()->for($user)->create([
            'anonymous' => false,
        ]);

        $this->assertEquals('John Doe | Acme Corp', $review->reviewer_display_name);
    }
}

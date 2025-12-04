<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ReviewController
 */
final class ReviewControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function create_displays_view(): void
    {
        $supplier = Supplier::factory()->create();
        $response = $this->get(route('suppliers.reviews.create', $supplier));

        $response->assertOk();
        $response->assertViewIs('review.create');
        $response->assertViewHas('supplier');
    }

    #[Test]
    public function store_creates_review(): void
    {
        $user = User::factory()->create();
        $reviewerSupplier = Supplier::factory()->create();
        $user->supplier()->associate($reviewerSupplier);
        $user->save();

        $reviewedSupplier = Supplier::factory()->create();

        $data = [
            'reviewed_supplier_id' => $reviewedSupplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
            'deal_date' => '2023-01-01',
            'country' => 'US',
            'cost' => 5,
            'accuracy' => 5,
            'compliance' => 5,
            'communication' => 5,
            'quality' => 5,
            'support' => 5,
            'timeliness' => 5,
            'deal_again' => true,
            'anonymous' => false,
            'comment' => 'Great service',
        ];

        $response = $this->actingAs($user)->post(route('reviews.store'), $data);

        $response->assertRedirect(route('suppliers.show', $reviewedSupplier));
        $this->assertDatabaseHas('reviews', [
            'reviewed_supplier_id' => $reviewedSupplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
            'deal_date' => '2023-01-01 00:00:00',
            'country' => 'US',
            'cost' => 5,
            'accuracy' => 5,
            'compliance' => 5,
            'communication' => 5,
            'quality' => 5,
            'support' => 5,
            'timeliness' => 5,
            'deal_again' => 1,
            'anonymous' => 0,
            'comment' => 'Great service',
        ]);
    }

    #[Test]
    public function show_displays_view(): void
    {
        $review = Review::factory()->create();

        $response = $this->get(route('reviews.show', $review));

        $response->assertOk();
        $response->assertViewIs('review.show');
        $response->assertViewHas('review');
    }

    #[Test]
    public function create_redirects_with_warning_if_already_reviewed(): void
    {
        $user = User::factory()->create();
        $supplier = Supplier::factory()->create();

        // Create an existing review
        Review::factory()->create([
            'user_id' => $user->id,
            'reviewed_supplier_id' => $supplier->id,
        ]);

        $response = $this->actingAs($user)->get(
            route('suppliers.reviews.create', $supplier),
        );

        $response->assertRedirect(route('suppliers.show', $supplier));
        $response->assertSessionHas(
            'warning',
            'You have already submitted a review for this supplier.',
        );
    }

    #[Test]
    public function store_redirects_with_error_on_duplicate_review(): void
    {
        $user = User::factory()->create();
        $reviewerSupplier = Supplier::factory()->create();
        $user->supplier()->associate($reviewerSupplier);
        $user->save();

        $reviewedSupplier = Supplier::factory()->create();

        // Create an existing review
        Review::factory()->create([
            'user_id' => $user->id,
            'reviewed_supplier_id' => $reviewedSupplier->id,
        ]);

        $data = [
            'reviewed_supplier_id' => $reviewedSupplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
            'deal_date' => '2023-01-01',
            'country' => 'US',
            'cost' => 5,
            'accuracy' => 5,
            'compliance' => 5,
            'communication' => 5,
            'quality' => 5,
            'support' => 5,
            'timeliness' => 5,
            'deal_again' => true,
            'anonymous' => false,
            'comment' => 'Great service',
        ];

        $response = $this->actingAs($user)->post(route('reviews.store'), $data);

        $response->assertRedirect(route('suppliers.show', $reviewedSupplier));
        $response->assertSessionHas(
            'error',
            'You have already submitted a review for this supplier.',
        );
    }

    #[Test]
    public function store_fails_validation_when_comment_provided_for_anonymous_review(): void
    {
        $user = User::factory()->create();
        $reviewerSupplier = Supplier::factory()->create();
        $user->supplier()->associate($reviewerSupplier);
        $user->save();

        $reviewedSupplier = Supplier::factory()->create();

        $data = [
            'reviewed_supplier_id' => $reviewedSupplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
            'deal_date' => '2023-01-01',
            'country' => 'US',
            'cost' => 5,
            'accuracy' => 5,
            'compliance' => 5,
            'communication' => 5,
            'quality' => 5,
            'support' => 5,
            'timeliness' => 5,
            'deal_again' => true,
            'anonymous' => true,
            'comment' => 'This should fail',
        ];

        $response = $this->actingAs($user)->post(route('reviews.store'), $data);

        $response->assertSessionHasErrors([
            'comment' => 'Comments are not allowed for anonymous reviews.',
        ]);
    }

    #[Test]
    public function store_rejects_reviews_with_profanity(): void
    {
        $user = User::factory()->create();
        $reviewerSupplier = Supplier::factory()->create();
        $user->supplier()->associate($reviewerSupplier);
        $user->save();

        $reviewedSupplier = Supplier::factory()->create();

        $data = [
            'reviewed_supplier_id' => $reviewedSupplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
            'deal_date' => '2023-01-01',
            'country' => 'US',
            'cost' => 5,
            'accuracy' => 5,
            'compliance' => 5,
            'communication' => 5,
            'quality' => 5,
            'support' => 5,
            'timeliness' => 5,
            'deal_again' => true,
            'anonymous' => false,
            'comment' => 'This is fucking awesome',
        ];

        $response = $this->actingAs($user)->post(route('reviews.store'), $data);

        $response->assertRedirect();
        $response->assertSessionHasErrors([
            'comment' => 'Your comment contains offensive language. Please review the masked words and modify accordingly.',
        ]);
        $this->assertDatabaseMissing('reviews', [
            'reviewed_supplier_id' => $reviewedSupplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
        ]);
    }
}

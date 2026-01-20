<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\ReviewCreated;
use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;
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

        $user = User::factory()->create();
        $this->actingAs($user);

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
            'deal_date' => now()->subYears(2)->format('Y-m-d'),
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

        $this->assertEquals(
            now()->subYears(2)->toDateString(),
            Review::first()->deal_date->toDateString(),
        );
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
        $reviewerSupplier = Supplier::factory()->create();
        $user = User::factory()->create([
            'supplier_id' => $reviewerSupplier->id,
        ]);
        $supplier = Supplier::factory()->create();

        // Create an existing review
        Review::factory()->create([
            'user_id' => $user->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'reviewed_supplier_id' => $supplier->id,
        ]);

        $response = $this->actingAs($user)->get(
            route('suppliers.reviews.create', $supplier),
        );

        $response->assertRedirect(route('suppliers.show', $supplier));
        $response->assertSessionHas(
            'warning',
            'Your company has already assessed this vendor.',
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
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'reviewed_supplier_id' => $reviewedSupplier->id,
        ]);

        $data = [
            'reviewed_supplier_id' => $reviewedSupplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
            'deal_date' => now()->subYears(2)->format('Y-m-d'),
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
            'Your company has already assessed this vendor.',
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
            'deal_date' => now()->subYears(2)->format('Y-m-d'),
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
            'deal_date' => now()->subYears(2)->format('Y-m-d'),
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

    #[Test]
    public function store_dispatches_review_created_event(): void
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
            'deal_date' => now()->format('Y-m-d'),
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

        Event::fake([ReviewCreated::class]);

        $this->actingAs($user)->post(route('reviews.store'), $data);

        Event::assertDispatched(ReviewCreated::class);
    }

    #[Test]
    public function review_notification_is_sent_to_supplier_users(): void
    {
        Notification::fake();

        $user = User::factory()->create();
        $reviewerSupplier = Supplier::factory()->create();
        $user->supplier()->associate($reviewerSupplier);
        $user->save();

        $reviewedSupplier = Supplier::factory()->create();
        $targetUser = User::factory()->create([
            'supplier_id' => $reviewedSupplier->id,
        ]);
        $targetUser2 = User::factory()->create([
            'supplier_id' => $reviewedSupplier->id,
        ]);

        $data = [
            'reviewed_supplier_id' => $reviewedSupplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
            'deal_date' => now()->format('Y-m-d'),
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

        $this->actingAs($user)->post(route('reviews.store'), $data);

        Notification::assertSentTo(
            [$targetUser, $targetUser2],
            \App\Notifications\NewReviewNotification::class,
        );
    }

    #[Test]
    public function create_redirects_with_warning_if_colleague_already_reviewed(): void
    {
        $reviewerSupplier = Supplier::factory()->create();
        $colleague = User::factory()->create([
            'supplier_id' => $reviewerSupplier->id,
        ]);
        $user = User::factory()->create([
            'supplier_id' => $reviewerSupplier->id,
        ]);
        $supplier = Supplier::factory()->create();

        // Colleague has already reviewed the supplier
        Review::factory()->create([
            'user_id' => $colleague->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'reviewed_supplier_id' => $supplier->id,
        ]);

        $response = $this->actingAs($user)->get(
            route('suppliers.reviews.create', $supplier),
        );

        $response->assertRedirect(route('suppliers.show', $supplier));
        $response->assertSessionHas(
            'warning',
            'Your company has already assessed this vendor.',
        );
    }

    #[Test]
    public function create_redirects_with_warning_if_reciprocal_review(): void
    {
        $reviewerSupplier = Supplier::factory()->create();
        $user = User::factory()->create([
            'supplier_id' => $reviewerSupplier->id,
        ]);
        $supplier = Supplier::factory()->create();

        // The target supplier has already reviewed the user's supplier
        Review::factory()->create([
            'reviewer_supplier_id' => $supplier->id,
            'reviewed_supplier_id' => $reviewerSupplier->id,
            'anonymous' => false,
        ]);

        $response = $this->actingAs($user)->get(
            route('suppliers.reviews.create', $supplier),
        );

        $response->assertRedirect(route('suppliers.show', $supplier));
        $response->assertSessionHas(
            'warning',
            'You cannot assess a vendor that has already assessed your company.',
        );
    }

    #[Test]
    public function store_redirects_with_error_if_reciprocal_review(): void
    {
        $reviewerSupplier = Supplier::factory()->create();
        $user = User::factory()->create([
            'supplier_id' => $reviewerSupplier->id,
        ]);
        $supplier = Supplier::factory()->create();

        // The target supplier has already reviewed the user's supplier
        Review::factory()->create([
            'reviewer_supplier_id' => $supplier->id,
            'reviewed_supplier_id' => $reviewerSupplier->id,
            'anonymous' => false,
        ]);

        $data = [
            'reviewed_supplier_id' => $supplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
            'deal_date' => now()->format('Y-m-d'),
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

        $response->assertRedirect(route('suppliers.show', $supplier));
        $response->assertSessionHas(
            'error',
            'You cannot assess a vendor that has already assessed your company.',
        );
    }

    #[Test]
    public function create_allows_reciprocal_review_if_original_is_anonymous(): void
    {
        $reviewerSupplier = Supplier::factory()->create();
        $user = User::factory()->create([
            'supplier_id' => $reviewerSupplier->id,
        ]);
        $supplier = Supplier::factory()->create();

        // The target supplier has already reviewed the user's supplier anonymously
        Review::factory()->create([
            'reviewer_supplier_id' => $supplier->id,
            'reviewed_supplier_id' => $reviewerSupplier->id,
            'anonymous' => true,
        ]);

        $response = $this->actingAs($user)->get(
            route('suppliers.reviews.create', $supplier),
        );

        $response->assertOk();
        $response->assertViewIs('review.create');
    }

    #[Test]
    public function store_allows_reciprocal_review_if_original_is_anonymous(): void
    {
        $reviewerSupplier = Supplier::factory()->create();
        $user = User::factory()->create([
            'supplier_id' => $reviewerSupplier->id,
        ]);
        $supplier = Supplier::factory()->create();

        // The target supplier has already reviewed the user's supplier anonymously
        Review::factory()->create([
            'reviewer_supplier_id' => $supplier->id,
            'reviewed_supplier_id' => $reviewerSupplier->id,
            'anonymous' => true,
        ]);

        $data = [
            'reviewed_supplier_id' => $supplier->id,
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'user_id' => $user->id,
            'deal_date' => now()->format('Y-m-d'),
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

        $response->assertRedirect(route('suppliers.show', $supplier));
        $this->assertDatabaseHas('reviews', [
            'reviewer_supplier_id' => $reviewerSupplier->id,
            'reviewed_supplier_id' => $supplier->id,
            'user_id' => $user->id,
            'comment' => 'Great service',
        ]);
    }
}

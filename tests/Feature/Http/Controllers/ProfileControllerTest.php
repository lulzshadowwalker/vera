<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_renders_profile_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('profile.show'));

        $response->assertStatus(200);
        $response->assertViewIs('profile.show');
        $response->assertViewHas('user', $user);
        $response->assertViewHas('reviews');
    }

    public function test_it_displays_user_reviews()
    {
        $user = User::factory()->create();
        $supplier = Supplier::factory()->create();
        $reviewedSupplier = Supplier::factory()->create();

        $review = Review::factory()->create([
            'user_id' => $user->id,
            'reviewer_supplier_id' => $supplier->id,
            'reviewed_supplier_id' => $reviewedSupplier->id,
            'comment' => 'Great supplier',
        ]);

        $response = $this->actingAs($user)->get(route('profile.show'));

        $response->assertSee('Great supplier');
        $response->assertSee($reviewedSupplier->name);
    }

    public function test_it_redirects_unauthenticated_users()
    {
        $response = $this->get(route('profile.show'));

        $response->assertRedirect(route('auth.login.index'));
    }
}

<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_the_contact_page(): void
    {
        $this->get(route('contact.index'))
            ->assertOk()
            ->assertViewIs('contact.index');
    }

    #[Test]
    public function it_stores_a_contact_message_from_a_guest(): void
    {
        $data = [
            'name' => 'Guest User',
            'email' => 'guest@example.com',
            'subject' => 'Guest Inquiry',
            'message' => 'This is a message from a guest user.',
        ];

        $response = $this->post(route('contact.store'), $data);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Guest User',
            'email' => 'guest@example.com',
            'subject' => 'Guest Inquiry',
            'message' => 'This is a message from a guest user.',
            'user_id' => null,
        ]);
    }

    #[Test]
    public function it_stores_a_contact_message_from_an_authenticated_user(): void
    {
        $user = User::factory()->create();

        $data = [
            'name' => 'Auth User',
            'email' => 'auth@example.com',
            'subject' => 'Auth Inquiry',
            'message' => 'This is a message from an authenticated user.',
        ];

        $response = $this->actingAs($user)->post(route('contact.store'), $data);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Auth User',
            'email' => 'auth@example.com',
            'subject' => 'Auth Inquiry',
            'message' => 'This is a message from an authenticated user.',
            'user_id' => $user->id,
        ]);
    }

    #[Test]
    public function it_validates_the_contact_form(): void
    {
        $response = $this->post(route('contact.store'), []);

        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
    }
}

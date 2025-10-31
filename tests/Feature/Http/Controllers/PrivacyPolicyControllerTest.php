<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class PrivacyPolicyControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_privacy_policy_page(): void
    {
        $this->get(route('privacy-policy.index'))
            ->assertOk()
            ->assertViewIs('privacy-policy.index');
    }
}

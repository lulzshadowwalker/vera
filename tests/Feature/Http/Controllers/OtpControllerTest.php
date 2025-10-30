<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class OtpControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_the_otp_verification_page(): void
    {
        $this->get(route('auth.otp.index'))
            ->assertOk()
            ->assertViewIs('auth.otp.index');
    }
}

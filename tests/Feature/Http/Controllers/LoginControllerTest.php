<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_the_login_page(): void
    {
        $this->get(route('auth.login.index'))
            ->assertOk()
            ->assertViewIs('auth.login.index');
    }
}

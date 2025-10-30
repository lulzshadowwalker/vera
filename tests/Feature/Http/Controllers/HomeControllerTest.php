<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_the_home_page(): void
    {
        $this->get(route('home.index'))
            ->assertOk()
            ->assertViewIs('home.index');
    }
}

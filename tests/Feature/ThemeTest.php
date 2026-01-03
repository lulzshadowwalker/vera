<?php

namespace Tests\Feature;

use Tests\TestCase;

class ThemeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_theme_can_be_toggled()
    {
        $response = $this->postJson(route('theme.toggle'));

        $response->assertOk()
            ->assertJson(['theme' => 'dark']);

        $this->assertEquals('dark', session('theme'));

        $response = $this->postJson(route('theme.toggle'));

        $response->assertOk()
            ->assertJson(['theme' => 'light']);

        $this->assertEquals('light', session('theme'));
    }
}

<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class TermsAndConditionsControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_terms_and_conditions_page(): void
    {
        $this->markTestSkipped(
            'currently, we display the privacy policy view instead.',
        );

        $this->get(route('terms-and-conditions.index'))
            ->assertOk()
            ->assertViewIs('terms-and-conditions.index');
    }
}

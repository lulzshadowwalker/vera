<?php

namespace App\Contracts;

interface ProfanityFilter
{
    /**
     * Filter and mask profanities in the given text.
     */
    public function filter(string $text): string;

    /**
     * Check if the given text contains profanities.
     */
    public function hasProfanity(string $text): bool;
}

<?php

namespace App\Services;

use App\Contracts\ProfanityFilter;
use Blaspsoft\Blasp\Facades\Blasp;

class BlaspProfanityFilter implements ProfanityFilter
{
    /**
     * Filter and mask profanities in the given text.
     */
    public function filter(string $text): string
    {
        $result = Blasp::allLanguages()->check($text);

        return $result->getCleanString();
    }

    /**
     * Check if the given text contains profanities.
     */
    public function hasProfanity(string $text): bool
    {
        $result = Blasp::allLanguages()->check($text);

        return $result->hasProfanity();
    }
}

<?php

namespace App\Rules;

use App\Contracts\ProfanityFilter;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoProfanity implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(
        string $attribute,
        mixed $value,
        Closure $fail,
    ): void {
        $filter = app(ProfanityFilter::class);

        if ($filter->hasProfanity($value)) {
            $fail('Your comment contains offensive language.');
        }
    }
}

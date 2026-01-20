<?php

namespace App\BusinessRules;

use App\Models\Supplier;
use App\Models\User;

class PreventSelfReview implements ReviewRule
{
    public function passes(User $reviewer, Supplier $reviewedSupplier): bool
    {
        return $reviewer->supplier_id !== $reviewedSupplier->id;
    }

    public function message(): string
    {
        return 'You cannot assess your own vendor.';
    }
}

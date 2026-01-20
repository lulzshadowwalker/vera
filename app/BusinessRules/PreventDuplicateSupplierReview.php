<?php

namespace App\BusinessRules;

use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use InvalidArgumentException;

class PreventDuplicateSupplierReview implements ReviewRule
{
    public function passes(User $reviewer, Supplier $reviewedSupplier): bool
    {
        if (! $reviewer->supplier_id) {
            throw new InvalidArgumentException('user does not belong to a supplier');
        }

        return ! Review::where('reviewer_supplier_id', $reviewer->supplier_id)
            ->where('reviewed_supplier_id', $reviewedSupplier->id)
            ->exists();
    }

    public function message(): string
    {
        return 'Your company has already assessed this vendor.';
    }
}

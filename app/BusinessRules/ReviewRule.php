<?php

namespace App\BusinessRules;

use App\Models\Supplier;
use App\Models\User;

interface ReviewRule
{
    public function passes(User $reviewer, Supplier $reviewedSupplier): bool;

    public function message(): string;
}

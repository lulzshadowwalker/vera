<?php

namespace App\Policies;

use App\BusinessRules\PreventDuplicateSupplierReview;
use App\BusinessRules\PreventReciprocalReview;
use App\BusinessRules\PreventSelfReview;
use App\BusinessRules\ReviewRule;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ReviewPolicy
{
    /**
     * The business rules that must pass for a review to be created.
     *
     * @var array<int, class-string<ReviewRule>>
     */
    protected array $rules = [
        PreventSelfReview::class,
        PreventDuplicateSupplierReview::class,
        PreventReciprocalReview::class,
    ];

    /**
     * Determine whether the user can create a review for the supplier.
     */
    public function create(User $user, Supplier $supplier): Response
    {
        foreach ($this->rules as $class) {
            $rule = new $class;

            if (! $rule->passes($user, $supplier)) {
                return Response::deny($rule->message());
            }
        }

        return Response::allow();
    }
}

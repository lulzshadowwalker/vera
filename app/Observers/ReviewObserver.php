<?php

namespace App\Observers;

use App\Events\ReviewCreated;
use App\Models\Review;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class ReviewObserver
{
    public function creating(Review $review): void
    {
        if (! $review->ulid) {
            $review->ulid = (string) Str::ulid();
        }
    }

    /**
     * Handle the Review "created" event.
     */
    public function created(Review $review): void
    {
        Cache::forget('stats.reviews_count');
        Cache::forget('stats.assessed_companies_count');

        ReviewCreated::dispatch($review);
    }

    /**
     * Handle the Review "deleted" event.
     */
    public function deleted(Review $review): void
    {
        Cache::forget('stats.reviews_count');
        Cache::forget('stats.assessed_companies_count');
    }
}

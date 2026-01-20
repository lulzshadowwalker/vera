<?php

namespace App\Observers;

use App\Events\ReviewCreated;
use App\Models\Review;
use Illuminate\Support\Facades\Cache;

class ReviewObserver
{
    /**
     * Handle the Review "created" event.
     */
    public function created(Review $review): void
    {
        Cache::forget('stats.reviews_count');

        ReviewCreated::dispatch($review);
    }

    /**
     * Handle the Review "deleted" event.
     */
    public function deleted(Review $review): void
    {
        Cache::forget('stats.reviews_count');
    }
}

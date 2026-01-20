<?php

namespace App\Listeners;

use App\Events\ReviewCreated;
use App\Notifications\NewReviewNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class NotifySupplierUsers implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ReviewCreated $event): void
    {
        $users = $event->review->reviewedSupplier->users;

        Notification::send($users, new NewReviewNotification($event->review));
    }
}

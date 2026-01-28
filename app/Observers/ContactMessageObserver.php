<?php

namespace App\Observers;

use App\Events\ContactMessageReceived;
use App\Models\ContactMessage;

class ContactMessageObserver
{
    public function created(ContactMessage $contactMessage): void
    {
        ContactMessageReceived::dispatch($contactMessage);
    }
}

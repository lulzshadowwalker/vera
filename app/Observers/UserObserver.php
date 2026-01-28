<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserObserver
{
    public function created(User $user): void
    {
        Cache::forget('stats.users_count');
    }

    public function deleted(User $user): void
    {
        Cache::forget('stats.users_count');
    }
}

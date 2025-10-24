<?php

namespace Tests\Traits;

use Exception;
use Illuminate\Support\Facades\Artisan;

trait WithRoles
{
    public function setUpWithRoles(): void
    {
        $failed = Artisan::call('upsert:role');
        if ($failed) {
            throw new Exception('failed to setup roles');
        }
    }
}

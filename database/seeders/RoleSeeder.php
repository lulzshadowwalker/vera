<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $failed = Artisan::call('upsert:role');
        if ($failed) {
            throw new Exception('failed to seed roles');
        }
    }
}

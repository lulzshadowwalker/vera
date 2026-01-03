<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $failed = Artisan::call('upsert:countries');
        if ($failed) {
            throw new Exception('failed to seed countries');
        }
    }
}

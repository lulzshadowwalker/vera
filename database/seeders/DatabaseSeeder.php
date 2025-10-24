<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class]);

        $admin = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => '4g8rCaaO+wBehgYG',
        ]);
        $admin->assignRole(Role::admin);
    }
}

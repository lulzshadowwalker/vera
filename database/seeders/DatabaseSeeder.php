<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use App\Services\DomainNormalizationService;
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

        $domainService = app(DomainNormalizationService::class);

        // Create test suppliers
        $acmeSupplier = Supplier::create([
            'domain' => 'acme.com',
            'name' => 'Acme Corporation',
            'country' => 'US',
        ]);

        $techSupplier = Supplier::create([
            'domain' => 'techsolutions.io',
            'name' => 'Tech Solutions',
            'country' => 'UK',
        ]);

        $industrialSupplier = Supplier::create([
            'domain' => 'industrial-supply.com',
            'name' => 'Industrial Supply Co',
            'country' => 'DE',
        ]);

        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@acme.com',
            'password' => '4g8rCaaO+wBehgYG',
            'email_verified_at' => now(),
            'supplier_id' => $acmeSupplier->id,
        ]);
        $admin->assignRole(Role::admin);

        // Create test users with different suppliers
        User::create([
            'name' => 'John Doe',
            'email' => 'john@acme.com',
            'backup_email' => 'john.backup@acme.com',
            'email_verified_at' => now(),
            'supplier_id' => $acmeSupplier->id,
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@techsolutions.io',
            'email_verified_at' => now(),
            'supplier_id' => $techSupplier->id,
        ]);

        User::create([
            'name' => 'Bob Johnson',
            'email' => 'bob@industrial-supply.com',
            'backup_email' => 'robert@industrial-supply.com',
            'email_verified_at' => now(),
            'supplier_id' => $industrialSupplier->id,
        ]);

        // Create additional random suppliers and users
        Supplier::factory(5)
            ->create()
            ->each(function ($supplier) {
                User::factory(2)->create([
                    'supplier_id' => $supplier->id,
                    'email_verified_at' => now(),
                ]);
            });

        // Create some reviews
        Review::factory(20)->create();
    }
}

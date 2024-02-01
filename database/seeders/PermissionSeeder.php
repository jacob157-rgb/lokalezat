<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // PERMISSIONS
        $permissions = [
            'create-user', 'read-user', 'update-user', 'delete-user',
            'create-kuliner', 'read-kuliner', 'update-kuliner', 'delete-kuliner',
            'create-toko', 'read-toko', 'update-toko', 'delete-toko',
            'create-menu', 'read-menu', 'update-menu', 'delete-menu',
            'create-wishlist', 'read-wishlist', 'update-wishlist', 'delete-wishlist',
            'create-review', 'read-review', 'update-review', 'delete-review',
            'create-reply', 'read-reply', 'update-reply', 'delete-reply',
            'create-report', 'read-report', 'update-report', 'delete-report',
        ];

        foreach ($permissions as $permission) {
            Permission::firstorCreate(['name' => $permission]);
        }
        // END PERMISSIONS
    }
}

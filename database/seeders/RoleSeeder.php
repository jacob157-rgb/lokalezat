<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        $roles = [
            'admin',
            'seller',
            'user',
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role]);
        }
        // END Roles

        // Pembagian Permissions ADMIN
        $admin = Role::findByName('admin');
        $admin->givePermissionTo(['read-user', 'update-user', 'delete-user']);
        $admin->givePermissionTo(['create-kuliner', 'read-kuliner', 'update-kuliner', 'delete-kuliner']);
        $admin->givePermissionTo(['create-toko', 'read-toko', 'update-toko', 'delete-toko']);
        $admin->givePermissionTo(['create-menu', 'read-menu', 'update-menu', 'delete-menu']);
        $admin->givePermissionTo(['read-review', 'delete-review']);
        $admin->givePermissionTo(['read-reply', 'delete-reply']);
        $admin->givePermissionTo(['read-report', 'update-report', 'delete-report']);
        // END Pembagian Permissions ADMIN

        // Pembagian Permissions SELLER
        $seller = Role::findByName('seller');
        $seller->givePermissionTo(['read-user']);
        $seller->givePermissionTo(['read-kuliner']);
        $seller->givePermissionTo(['create-toko', 'read-toko', 'update-toko', 'delete-toko']);
        $seller->givePermissionTo(['create-menu', 'read-menu', 'update-menu', 'delete-menu']);
        $seller->givePermissionTo(['read-review']);
        $seller->givePermissionTo(['create-reply', 'read-reply', 'update-reply', 'delete-reply']);
        $seller->givePermissionTo(['create-report']);
        // END Pembagian Permissions SELLER
        
        // Pembagian Permissions USER
        $user = Role::findByName('user');
        $user->givePermissionTo(['read-user']);
        $user->givePermissionTo(['read-toko']);
        $user->givePermissionTo(['read-menu']);
        $user->givePermissionTo(['read-kuliner']);
        $user->givePermissionTo(['create-review', 'read-review', 'update-review', 'delete-review']);
        $user->givePermissionTo(['create-reply', 'read-reply', 'update-reply', 'delete-reply']);
        $user->givePermissionTo(['create-wishlist', 'read-wishlist', 'update-wishlist', 'delete-wishlist']);
        $user->givePermissionTo(['create-report']);
        // END Pembagian Permissions USER
    }
}

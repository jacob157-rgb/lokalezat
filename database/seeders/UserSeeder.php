<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        $admin->syncRoles('admin');

        // Create Seller users
        $seller1 = User::create([
            'name' => 'Lala',
            'email' => 'lala@gmail.com',
            'password' => bcrypt('lala123'),
        ]);
        $seller1->syncRoles('seller');

        $seller2 = User::create([
            'name' => 'Lili',
            'email' => 'lili@gmail.com',
            'password' => bcrypt('lili123'),
        ]);
        $seller2->syncRoles('seller');

        // Create User users
        $user1 = User::create([
            'name' => 'Lulu',
            'email' => 'lulu@gmail.com',
            'password' => bcrypt('lulu123'),
        ]);
        $user1->syncRoles('user');

        $user2 = User::create([
            'name' => 'Khasnah',
            'email' => 'khasnah@gmail.com',
            'password' => bcrypt('khasnah123'),
        ]);
        $user2->syncRoles('user');

        $user3 = User::create([
            'name' => 'Ivana',
            'email' => 'ivana@gmail.com',
            'password' => bcrypt('ivana123'),
        ]);
        $user3->syncRoles('user');

        $user4 = User::create([
            'name' => 'Jacob',
            'email' => 'jacob@gmail.com',
            'password' => bcrypt('jacob123'),
        ]);
        $user4->syncRoles('user');

        $user5 = User::create([
            'name' => 'Rifqi',
            'email' => 'rifqi@gmail.com',
            'password' => bcrypt('rifqi123'),
        ]);
        $user5->syncRoles('user');
    }
}

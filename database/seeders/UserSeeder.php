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
        $user = [
            [
                'name' => 'sadmin',
                'email' => 'sadmin@gmail.com',
                'password' => 'sadmin123',
                'roles' => '1',
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin123',
                'roles' => '2',
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => 'user1234',
                'roles' => '3',
            ],
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => 'user1234',
                'roles' => '3',
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

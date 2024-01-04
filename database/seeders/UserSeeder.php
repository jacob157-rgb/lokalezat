<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
        [
            'name'=>'sadmin',
            'email'=>'sadmin@gmail.com',
            'password'=>Hash::make('sadmin12'),
            'roles'=>1,
        ],
        [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'roles'=>2,
        ],
        [
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('user1234'),
            'roles'=>3,
        ],
    ];

    foreach ($user as $key => $value) {
        User::create($value);
    }

    }
}

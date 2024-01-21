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
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' =>bcrypt('admin123'),
                'roles' => 1            
            ],
            [
                'name' => 'Lala',
                'email' => 'lala@gmail.com',
                'password' =>bcrypt('lala123'),
                'roles' => 2
            ],
            [
                'name' => 'Lili',
                'email' => 'lili@gmail.com',
                'password' =>bcrypt('lili123'),
                'roles' => 2
            ],
            [
                'name' => 'Lulu',
                'email' => 'lulu@gmail.com',
                'password' =>bcrypt('lulu123'),
                'roles' => 3
            ],
            [
                'name' => 'Khasnah',
                'email' => 'khasnah@gmail.com',
                'password' =>bcrypt('khasnah123'),
                'roles' => 3
            ],
            [
                'name' => 'Ivana',
                'email' => 'ivana@gmail.com',
                'password' =>bcrypt('ivana123'),
                'roles' => 3
            ],
            [
                'name' => 'Jacob',
                'email' => 'jacob@gmail.com',
                'password' =>bcrypt('jacob123'),
                'roles' => 3
            ],
            [
                'name' => 'Rifqi',
                'email' => 'rifqi@gmail.com',
                'password' =>bcrypt('rifqi123'),
                'roles' => 3
            ],
            ]);
    }
}

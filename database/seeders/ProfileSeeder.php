<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::insert([
            [
                'user_id' => '4',
                'profil_photos' => 'foto1.jpg',
                'bio' => 'aku adalah aku',
                'gender' => 'P'
            ],
            [
                'user_id' => '5',
                'profil_photos' => 'foto2.jpg',
                'bio' => 'aku adalah aku',
                'gender' => 'P'
            ],
            [
                'user_id' => '6',
                'profil_photos' => 'foto3.jpg',
                'bio' => 'aku adalah aku',
                'gender' => 'P'
            ],
            [
                'user_id' => '7',
                'profil_photos' => 'foto4.jpg',
                'bio' => 'aku adalah aku',
                'gender' => 'L'
            ],
            [
                'user_id' => '8',
                'profil_photos' => 'foto5.jpg',
                'bio' => 'aku adalah aku',
                'gender' => 'L'
            ]
            ]);
    }
}

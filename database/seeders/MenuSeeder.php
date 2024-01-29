<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menu::insert([
        //     [
        //         'toko_id' => 1,
        //         'name' => 'Sate Kambing Muda',
        //         'description' => 'Sate kambing muda adalah sate khas dengan daging kambing muda dengan tekstur yang empuk dan rasa yang gurih',
        //         'view_count' => 120,
        //         'ratings' => 4.5,
        //         'harga' => 80.000,
        //         'jadwal_tersedia' => 'Setiap hari jam 09.00-22.00',
        //         'karakteristik' => 'Pedas Gurih',
        //         'status' => 'tidak mengandung babi',
        //         'kuliner_id' => 1,
        //         'foto_menu' => 'images/menu/satekambing.png'
        //     ],
        //     [
        //         'toko_id' => 1,
        //         'name' => 'Gulai Kambing',
        //         'description' => 'Gulai kambing merupakan sup khas dengan banyak rempah dan bersantan',
        //         'view_count' => 100,
        //         'ratings' => 5.0,
        //         'harga' => 40.000,
        //         'jadwal_tersedia' => 'Setiap hari jam 09.00-22.00',
        //         'karakteristik' => 'Bersantan Gurih',
        //         'status' => 'tidak mengandung babi',
        //         'kuliner_id' => 5,
        //         'foto_menu' => 'images/menu/gulai.png'
        //     ],
        //     [
        //         'toko_id' => 2,
        //         'name' => 'Kupat Bongkok',
        //         'description' => 'Kupat bongkok adalah makanan berbahan utama kupat yang dilengkapi dengan lauk pauk',
        //         'view_count' => 200,
        //         'ratings' => 4.0,
        //         'harga' => 10.000,
        //         'jadwal_tersedia' => 'Setiap hari jam 13.00-21.00',
        //         'karakteristik' => 'Pedas Gurih Bersantan',
        //         'status' => 'tidak mengandung babi',
        //         'kuliner_id' => 2,
        //         'foto_menu' => 'images/menu/kupat.png'
        //     ],
        // ]);
    }
}

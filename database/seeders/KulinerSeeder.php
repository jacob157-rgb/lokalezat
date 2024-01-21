<?php

namespace Database\Seeders;

use App\Models\Kuliner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KulinerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kuliner::insert([
            [
                'name' => 'Sate Tegal',
                'description' => 'Sate Tegal adalah hidangan lokal khas Tegal, terkenal dengan sate kambing tusuk panggang dan bumbu kacangnya. Dihidangkan dengan lontong atau nasi, serta bawang merah, tomat, dan timun sebagai pelengkap.',
                'foto_kuliner' => 'images/satetgl.png'
            ],
            [
                'name' => 'Soto Tegal',
                'description' => 'Soto Tegal adalah hidangan lokal khas Tegal, menggoda lidah dengan kuah gurih daging ayam dan rempah tradisional. Dilengkapi dengan Bihun, tauge, ketupat, Telur rebus, kentang, dan bawang goreng menambah variasi. Sambal pedas menjadi sentuhan khas',
                'foto_kuliner' => 'images/sototgl.png'
            ],
            [
                'name' => 'Kupat Bongkok',
                'description' => 'Kupat Bongkok, ketupat khas tegal, berbentuk unik, dibungkus daun pisang. Rasa gurih dan kenyalnya istimewa, sering disajikan dengan rendang atau sambal goreng',
                'foto_kuliner' => 'images/kupat.png'
            ],
            [
                'name' => 'Putu Ayu Tegal',
                'description' => 'Putu Ayu Tegal adalh kue tradisional bulat, berpadu tepung beras dan kelapa, dengan lapisan kelapa parut. Kelembutan dan kelezatan dalam setiap gigitan menciptakan pengalaman manis yang tak terlupakan dari kota Tegal',
                'foto_kuliner' => 'images/kupat.png'
            ],
            [
                'name' => 'Gulai',
                'description' => 'Gulai adalah sup bersantan dengan daging atau jeroan yang dilengkapi dengan berbagai rempah pilihan',
                'foto_kuliner' => 'images/gulai.png'
            ]
        ]);
    }
}

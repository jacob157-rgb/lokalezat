<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();

            // Reference User(2) (Seller 1 to 1 Toko)
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // End Reference User(2)

            $table->string('name'); // Nama Toko
            $table->decimal('ratings', 3,2)->default(0.0); // Ratings Bintang diambil dari rata rata Review Menu
            $table->string('cara_makan'); // ['Dine in','Takeaway']
            $table->string('jadwal_buka'); // Jadwal Buka Toko
            $table->string('alamat'); // Alamat Toko
            $table->string('link_gmaps'); // Link Google Maps di Upload Oleh Seller (Rencana Mau Pake Longitude Latitude. Kemungkinan Pake Laravolt/Indonesia)
            $table->string('tentang_toko'); // Deskripsikan Tentang Toko
            $table->string('cara_menjangkau'); // Deskripsi Cara Menjangkau Toko
            $table->string('akses_jalan')->nullable(); // Akses Jalan / (dapat dilewati oleh) ['Pejalan Kaki', 'Motor', 'Mobil Kecil', 'Mobil Sedang', 'Mobil Besar', 'Kendaraan Besar']
            $table->string('transportasi_umum')->nullable(); // Akses Transportasi Umum sekitar toko ['Bus', 'Mini Bus', 'Angkutan Umum', 'Ojek Online', 'Ojek', 'Becak', 'Taxi']
            $table->string('fasilitas_umum')->nullable(); // Fasilitas Toko [‘Mushola’, ‘Toilet’, ’Rest Area’, ‘Wifi’, 'Stop Kontak', 'Outdoor Area', 'Indoor Area', 'Kursi Anak', 'Tempat bermain']
            $table->string('kontak'); // Kontak Penjual ['No_WA', 'Email', 'Situs Web', 'Online Store']
            $table->string('foto_toko'); // Foto Dari Sekitar toko 
            $table->enum('status', [0,1])->default(0); // Status toko 0 = Inactive, 1 = Active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokos');
    }
};

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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();

            // Reference Toko
            $table->unsignedBigInteger('toko_id'); 
            $table->foreign('toko_id')->references('id')->on('tokos')->onDelete('cascade');
            // End Reference Toko

            $table->string('name'); // Nama Menu
            $table->string('description'); // Deskripsi Menu
            $table->integer('view_count'); // Field Menampung jumlah dilihat
            $table->decimal('ratings', 3,2)->default(0.0); // Ratings Bintang diambil dari rata rata Review Users
            $table->integer('harga'); // Harga Menu
            $table->string('jadwal_tersedia'); // Jadwal Ketersediaan Menu 
            $table->string('karakteristik'); // Karakteristik Menu (Berkuah, Kering, Bersantan, Pedas, Manis, Asin, Gurih)
            $table->string('status'); // Status Menu (Mengandung/Tidak Mengandung Babi/Alkohol)

            // Reference Kuliner
            $table->unsignedBigInteger('kuliner_id'); 
            $table->foreign('kuliner_id')->references('id')->on('kuliners');
            // End Refence Kuliner

            $table->string('foto_menu'); // Foto dari Menu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};

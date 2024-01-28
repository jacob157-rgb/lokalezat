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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();

            // Reference User(3) untuk Profile
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // End Reference User(3) untuk Profile

            $table->string('avatar')->nullable(); // Foto Profil untuk User(3)
            $table->string('bio', 150)->nullable(); // Biography? 
            $table->enum('gender', ['L','P','N']); // L = Laki-Laki, P = Perempuan, N = Tidak Menyebutkan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};

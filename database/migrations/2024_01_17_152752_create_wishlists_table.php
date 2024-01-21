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
        Schema::create('wishlists', function (Blueprint $table) {
            // Table Pivot Untuk User(3) dan Menu/Toko
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('toko_id')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('toko_id')->references('id')->on('tokos');
            $table->foreign('menu_id')->references('id')->on('menus');
            // End Table Pivot Untuk User(3) dan Menu/Toko
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};

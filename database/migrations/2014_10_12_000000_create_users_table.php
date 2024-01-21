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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Lengkap User
            $table->string('email')->unique(); // Email(gmail)
            $table->timestamp('email_verified_at')->nullable(); //Verifikasi Email
            $table->string('password');
            $table->enum('roles', [1,2,3]); //1 = Admin, 2 = RegisteredSeller, 3 = RegisteredUser
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

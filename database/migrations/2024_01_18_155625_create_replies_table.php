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
        Schema::create('replies', function (Blueprint $table) {
            $table->id();
            // Foreign Reviews
            $table->unsignedBigInteger('review_id');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');
            // End Foreign Reviews

            // Foreign User
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // End Foreign User

            $table->text('replies'); // Replies/Comment
            $table->string('foto_replies')->nullable(); // Photos for Replies
            $table->integer('like');
            $table->integer('dislike');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replies');
    }
};

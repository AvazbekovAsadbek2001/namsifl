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
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            // Asosiy ma'lumotlar
            $table->string('title');                    // Kitob nomi
            $table->string('author');                   // Muallif
            $table->text('description')->nullable();    // Tavsif

            // Kitob identifikatsiyasi
            $table->string('isbn')->unique()->nullable();  // ISBN kodi
            $table->year('published_year')->nullable();    // Nashr yili
            $table->string('publisher')->nullable();       // Nashriyot

            // Fizik xususiyatlari
            $table->integer('pages')->nullable();          // Sahifalar soni
            $table->string('language')->default('uz');     // Til (uz, ru, en)

            // Media
            $table->string('cover_image')->nullable();     // Muqova rasmi
            $table->string('file');

            // Kategoriya va status
            $table->string('category')->nullable();        // Kategoriya

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

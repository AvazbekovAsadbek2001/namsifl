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
        Schema::create('structure_translations', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['faculty', 'department', 'cafedra']);
            $table->integer('structure_id');
            $table->foreignId('lang_id')->constrained('langs');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structure_translations');
    }
};

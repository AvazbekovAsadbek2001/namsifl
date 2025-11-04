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
        Schema::create('employee_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['biography', 'work_experience', 'functional_duties'])->default('functional_duties');
            $table->text('content')->nullable();

            $table->string('lang_code')->default('uz');
            $table->foreign('lang_code')->references('code')->on('langs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_contents');
    }
};

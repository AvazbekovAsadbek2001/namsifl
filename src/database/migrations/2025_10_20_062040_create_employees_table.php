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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birth_date');
            $table->string('schedule_days')->nullable();
            $table->string('schedule_time')->default('09:00 - 17:00');
            
            $table->foreignId('nation_id')->constrained('nations');
            $table->foreignId('position_id')->constrained('positions');
            $table->string('position_description')->nullable();

            $table->string('photo');
            $table->foreignId('faculty_id')->nullable()->constrained('faculties');
            $table->foreignId('department_id')->nullable()->constrained('departments');
            $table->foreignId('cafedra_id')->nullable()->constrained('cafedras');

            $table->jsonb('social_medias'); // e.g., telegram,email,phone, linkedin,twitter,facabook,instagram, vkontakte, whatsApp  . . .
            $table->jsonb('employee_contents'); // biography, work_experience , functional_duties , . . .

            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

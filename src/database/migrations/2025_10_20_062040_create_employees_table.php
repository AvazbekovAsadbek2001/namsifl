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
            $table->data('bithday_data');
            $table->email('email')->nullable();
            $table->integer('phone')->nullable();
            $table->string('schedule_days')->default('Dushanba - Juma');
            $table->string('schedule_time')->default('09:00 - 17:00');
            
            $table->integer('nation_id')->unsigned();
            $table->foreign('nation_id')->references('id')->on('nations');
            
            $table->integer('position_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('positions');

            //employee_contents -> biography, work_experience , functional duties , . . .
            //social_medias -> telegram,email,linkedin,twitter,facabook, instagram, vkontakte, whatsApp  . . . 

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

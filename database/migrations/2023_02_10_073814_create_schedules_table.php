<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->Increments('id')->unsigned();
            $table->string('slug');
            $table->string('school_id');
            $table->time('time_in');
            $table->time('time_out');

            $table->timestamps();
        });

        Schema::create('schedule_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('schedule_id')->unsigned();
            $table->timestamps();


           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           // $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
        });





        // Schema::create('schedules', function ($table) {
        //     $table->id();
        //     $table->string('school_id');
        //     $table->string('slug');
        //     $table->time('time_in');
        //     $table->time('time_out');

        //     $table->timestamps();
        // });
        // Schema::create('schedule_users', function ($table) {

        //     $table->integer('user_id')->unsigned();
        //     $table->integer('schedule_id')->unsigned();
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');

        // });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        Schema::dropIfExists('schedule_users');
        Schema::dropIfExists('schedules');
    }
} ;

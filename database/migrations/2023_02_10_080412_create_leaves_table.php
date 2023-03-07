<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leaves', static function (Blueprint $table) {
            $table->id();
            $table->integer('uid')->unsigned()->default(0);
            $table->boolean('state')->default(0);
            $table->time('leave_time')->default(date("H:i:s"));
            $table->date('leave_date')->default(date("Y-m-d"));
            $table->boolean('status')->default(1);
            $table->boolean('type')->unsigned()->default(1);
            $table->string('att_type')->comment("AP" , "HDL") ; 
            $table->string('user_id') ; 
            $table->timestamps();

        });
    }

    public function down(): void
    {
        
   
           Schema::dropIfExists('leaves');
    }
};

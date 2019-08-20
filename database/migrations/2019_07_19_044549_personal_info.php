<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_info',function (Blueprint $table){
            $table->Increments('id');
            $table->integer('id_no')->index();
            $table->foreign('id_no')->references('id')->on('users')->onDelete('cascade');
            $table->string(' full_name')->index();
            $table->foreign('full_name')->references('name')->on('users')->onDelete('cascade');
            $table->string('Email')->index();
            $table->foreign('Email')->references('email')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_info');
    }
}

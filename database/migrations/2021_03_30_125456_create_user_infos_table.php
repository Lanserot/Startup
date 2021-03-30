<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('about')->nullable();
            $table->string('first_name');
            $table->string('second_name');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sex_id');
            $table->boolean('vip')->default(0);
            $table->unsignedBigInteger('speciality_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sex_id')->references('id')->on('sexes');
            $table->foreign('speciality_id')->references('id')->on('specialities');
            $table->string('img')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}

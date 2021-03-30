<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_vacancies', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vacancy_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vacancy_id')->references('id')->on('vacancies');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_vacancies');
    }
}

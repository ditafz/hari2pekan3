<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unSignedBigInteger('jawaban_id');
            $table->unSignedBigInteger('profile_id');
            $table->integer('poin');


            $table->foreign('jawaban_id')->references('id')->on('questions');
            $table->foreign('profile_id')->references('id')->on('users');
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
        Schema::dropIfExists('like_dislike_jawaban');
    }
}

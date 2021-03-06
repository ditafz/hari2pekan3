<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileIdToKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->unSignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->dropForeign(['profile_id']);
            $table->dropColumn(['profile_id']);
        });
    }
}

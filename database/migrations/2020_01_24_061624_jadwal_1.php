<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jadwal1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Jadwal', function (Blueprint $table) {
          $table->integer('theater_id')->unsigned();
          $table->integer('ruangan_id')->unsigned();
          $table->integer('movie_id')->unsigned();
          $table->date('start_date');
          $table->date('end_date');


          #Foreign Key
          $table->foreign('theater_id')->references('id')->on('theater');
          $table->foreign('ruangan_id')->references('id')->on('ruangan');
          $table->foreign('movie_id')->references('id')->on('movie');
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
      Schema::create('Jadwal', function(Blueprint $table) {
              $table->dropForeign('Jadwal_theater_id_foreign');
              $table->dropForeign('Jadwal_ruangan_id_foreign');
              $table->dropForeign('jadwal_movie_id_foreign');
          });
    }
}

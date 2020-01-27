<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::create('Jadwal', function (Blueprint $table) {
        //   $table->integer('theater_id')->unsigned()->change();
        //   $table->foreign('theater_id')->references('id')->on('Theater');
        //   $table->integer('ruangan_id')->unsigned()->change();
        //   $table->foreign('ruangan_id')->references('id')->on('Ruangan');
        //   $table->integer('movie_id')->unsigned()->change();
        //   $table->foreign('movie_id')->references('id')->on('Movie');
        //   $table->date('start_date');
        //   $table->date('end_date');
        //   $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    //     Schema::table('Jadwal', function(Blueprint $table) {
    //     $table->dropForeign('jadwal_theater_id_foreign');
    //     });
    // ​
    //     Schema::table('Jadwal', function(Blueprint $table) {
    //         $table->dropIndex('jadwal_theater_id_foreign');
    //     });
    // ​
    //     Schema::table('Jadwal', function(Blueprint $table) {
    //         $table->integer('theater_id')->change();
    //     });
    //
    //     Schema::table('Jadwal', function(Blueprint $table) {
    //     $table->dropForeign('jadwal_ruangan_id_foreign');
    //     });
    // ​
    //     Schema::table('Jadwal', function(Blueprint $table) {
    //         $table->dropIndex('jadwal_ruangan_id_foreign');
    //     });
    // ​
    //     Schema::table('Jadwal', function(Blueprint $table) {
    //         $table->integer('ruangan_id')->change();
    //     });
    //
    //     Schema::table('Jadwal', function(Blueprint $table) {
    //     $table->dropForeign('jadwal_movie_id_foreign');
    //     });
    // ​
    //     Schema::table('Jadwal', function(Blueprint $table) {
    //         $table->dropIndex('jadwal_ruangan_id_foreign');
    //     });
    // ​
    //     Schema::table('Jadwal', function(Blueprint $table) {
    //         $table->integer('ruangan_id')->change();
    //     });



    }
}

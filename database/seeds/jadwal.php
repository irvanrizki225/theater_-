<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class jadwal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory (App \ jadwal::class, 20)->create();
        DB::table('jadwal')->insert([
              'theater_id' => 1,
              'ruangan_id' => 1,
              'movie_id'=> 1,
              'start_date' => DATE("2020-01-01"),
              'end_date' => DATE("2020-01-21"),
          ]);
    }
}

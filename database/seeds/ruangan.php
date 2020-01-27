<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ruangan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory (App\ruangan :: class, 20)->create();
        DB::table('ruangan')->insert([
              'nama' => Str::random(10),
              'seat' => 1,
          ]);
    }
}

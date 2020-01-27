<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class movie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory (App \ movie::class, 20)->create();
      DB::table('movie')->insert([
            'nama' => Str::random(10),
            'minutes' => 120,
        ]);
    }
}

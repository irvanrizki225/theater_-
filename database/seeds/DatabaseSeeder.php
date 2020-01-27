<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Theater::class);
        $this->call(ruangan::class);
        $this->call(movie::class);
        $this->call(jadwal::class);
        $this->call(userseeder::class);
    }
}

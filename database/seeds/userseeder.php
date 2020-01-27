<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\User;
        $user->name = "Irvan Rizki";
        $user->email = "irvanrizki225@gmail.com";
        $user->password = Hash::make('irvan');
        $user->api_token = str::random(100);
        $user->save();
    }
}

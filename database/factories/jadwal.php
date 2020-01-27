<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\jadwal::class, function (Faker $faker) {
    return [
        //
        'start_date' => $faker->date,
        'end_date' => $faker->date,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\movie::class, function (Faker $faker) {
    return [
        'nama' => $faker->nama,
        'minutes' => $fake->minutes,
    ];
});

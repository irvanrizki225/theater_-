<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ruangan::class, function (Faker $faker) {
    return [
        'nama' => $faker->nama,
        'seat' => $fake->seat,
    ];
});

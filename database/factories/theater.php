<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Theater::class, function (Faker $faker) {
    return [
      'id' => function(){
          return factory('App\Theater')->create()->id;
      },
        'nama' => $faker->nama,
    ];
});

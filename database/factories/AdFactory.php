<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Ad::class, function (Faker $faker) {
    return [
        'medicine' => $faker->words(3,true),
        'hygiene_supply' => $faker->words(3,true),
        'food' => $faker->words(3,true),
        'toys' => $faker->words(3,true),
        'accessories' => $faker->words(3,true),
        'others' => $faker->sentence(5),
        'user_id' => random_int(1,10),
    ];
});

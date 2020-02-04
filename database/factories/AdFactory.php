<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Ad::class, function (Faker $faker) {
    $usuarios = User::pluck('id');
    return [
        'medicine' => $faker->words(3,true),
        'hygiene_supply' => $faker->words(3,true),
        'food' => $faker->words(3,true),
        'toys' => $faker->words(3,true),
        'accessories' => $faker->words(3,true),
        'others' => $faker->sentence(5),
        'user_id' =>  $faker->randomElement($usuarios), 
    ];
});

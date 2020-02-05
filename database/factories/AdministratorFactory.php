<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
$factory->define(App\Administrator::class, function (Faker $faker) {
    $usuarios = User::pluck('id');
    return [
        'name'=> $faker->name,
        'user_id' => $faker->randomElement($usuarios), 
    ];
});

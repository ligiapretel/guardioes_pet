<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $usuarios = User::pluck('id');
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password(),
        'remember_token' => Str::random(10),
        'user_group_id' => random_int(1,3),
        'status_id' => random_int(1,2),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
$factory->define(App\Guardian::class, function (Faker $faker) {
    $usuarios = User::pluck('id');
    return [
        'name'=> $faker->name,
        'nickname'=> $faker->userName,
        'date_of_birth' => $faker->date,
        'phone_number' => $faker->randomNumber(9,false),
        'profile_picture' => $faker->imageUrl,
        'address' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'complement' => $faker->secondaryAddress,
        'zip_code' => $faker->randomNumber(8,false),
        'neighborhood' => $faker->cityPrefix,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'about_the_guardian' => $faker->text(400),
        'user_id' => $faker->randomElement($usuarios), 
    ];
});

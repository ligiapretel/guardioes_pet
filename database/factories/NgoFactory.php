<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Ngos::class, function (Faker $faker) {
    $usuarios = User::pluck('id');
    return [
        'social_name' => $faker->company,
        'fantasy_name' => $faker->name,
        'cnpj' => $faker->randomNumber(9,false),
        'profile_picture' => $faker->imageUrl,
        'site' => $faker->url,
        'phone_number' => $faker->randomNumber(9,false),
        'responsable_name' => $faker->name,
        'address' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'complement' => $faker->secondaryAddress,
        'zip_code' => $faker->randomNumber(8,false),
        'neighborhood' => $faker->cityPrefix,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'about_the_ngo' => $faker->text(400),
        'type_account' => $faker->sentence(2,true),
        'bank_name' => $faker->sentence(2,true),
        'bank_agency' => $faker->randomNumber(4,false),
        'bank_account' => $faker->randomNumber(7,false),
        'user_id'=> $faker->randomElement($usuarios), 
    ];
});

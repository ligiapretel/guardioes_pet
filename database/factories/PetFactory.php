<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Pet::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'type'=> $faker->randomElement(['Gato', 'Cachorro']),
        'sex'=> $faker->randomElement(['Macho', 'Fêmea']),
        'picture'=> $faker->imageUrl,
        'animal_bearing '=> $faker->randomElement(['Pequeno', 'Médio','Grande']),
        'coal_type '=> $faker->randomElement(['Preto', 'Branco','Colorido']),
        'castration '=> $faker->boolean(['Sim', 'Não']),
        'docile '=> $faker->boolean(['Sim', 'Não']),
        'like_children '=> $faker->boolean(['Sim', 'Não']),
        'live_well_with_animals '=> $faker->boolean(['Sim', 'Não']),
        'like_to_play '=> $faker->boolean(['Sim', 'Não']),
        'well_behaved '=> $faker->boolean(['Sim', 'Não']),
        'adoption_available '=>  $faker->boolean(['Sim', 'Não']),
        'temporary_home_available '=> $faker->boolean(['Sim', 'Não']),
        'sponsorship_available '=> $faker->boolean(['Sim', 'Não']),
        'user_id'=> $faker->random_int(1,10),        
    ];
});

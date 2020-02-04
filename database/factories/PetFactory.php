<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Pet::class, function (Faker $faker) {
    $usuarios = User::pluck('id'); //puxa o array de id que existe no banco exemplo abaixo:
    /*
    banco:   
        [
            'id'=> 1,
            'name' => 'Anae',
        ],
        [
            'id'=>2,
            'name'=>'Maria',
        ]
    Usando Pluck:
        User::pluck('id') =
        [
            1, 2 
        ];
    */    
    return [
        'name'=> $faker->name,
        'type'=> $faker->randomElement(['Gato', 'Cachorro']),
        'sex'=> $faker->randomElement(['M', 'F']),
        'age'=> $faker->numberBetween( 1, 20),
        'breed'=> $faker->randomElement(['Vira-Lata', 'Labrador', 'Yorkshire']),
        'animal_bearing'=> $faker->randomElement(['pequeno', 'medio','grande']),
        'coal_type'=> $faker->randomElement(['Preto', 'Branco','Colorido']),
        'castration'=> $faker->randomElement([1,0]),
        'docile'=> $faker->randomElement([1,0]),
        'like_children'=> $faker->randomElement([1,0]),
        'live_well_with_animals'=> $faker->randomElement([1,0]),
        'like_to_play'=> $faker->randomElement([1,0]),
        'well_behaved'=> $faker->randomElement([1,0]),
        'vaccinated'=> $faker->randomElement([1,0]),
        'deworming'=> $faker->randomElement([1,0]),
        'adoption_available'=>  $faker->randomElement([1,0]),
        'temporary_home_available'=> $faker->randomElement([1,0]),
        'sponsorship_available'=> $faker->randomElement([1,0]),
        'description'=> $faker->text(400),
        'user_id'=> $faker->randomElement($usuarios),        
    ];
});

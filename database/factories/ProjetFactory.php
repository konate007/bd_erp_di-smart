<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Projet;
use Faker\Generator as Faker;

$factory->define(Projet::class, function (Faker $faker) {

    return [
        'nom_projet' => $faker->word,
        'description' => $faker->word,
        'client_id' => $faker->randomDigitNotNull,
        'date_lancement' => $faker->word,
        'date_livraison' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

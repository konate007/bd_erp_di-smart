<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Demande;
use Faker\Generator as Faker;

$factory->define(Demande::class, function (Faker $faker) {

    return [
        'objet' => $faker->word,
        'departement_id' => $faker->randomDigitNotNull,
        'projet_id' => $faker->randomDigitNotNull,
        'message' => $faker->text,
        'niveau_importance_id' => $faker->randomDigitNotNull,
        'type_demande_id' => $faker->randomDigitNotNull,
        'statut' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

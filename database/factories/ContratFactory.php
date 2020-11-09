<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contrat;
use Faker\Generator as Faker;

$factory->define(Contrat::class, function (Faker $faker) {

    return [
        'projet_id' => $faker->randomDigitNotNull,
        'planmaintenance_id' => $faker->randomDigitNotNull,
        'description' => $faker->text,
        'date_debut' => $faker->date('Y-m-d H:i:s'),
        'date_fin' => $faker->date('Y-m-d H:i:s'),
        'statut' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

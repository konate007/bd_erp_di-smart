<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Niveau_Importance;
use Faker\Generator as Faker;

$factory->define(Niveau_Importance::class, function (Faker $faker) {

    return [
        'niveau' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

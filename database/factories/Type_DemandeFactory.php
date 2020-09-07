<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Type_Demande;
use Faker\Generator as Faker;

$factory->define(Type_Demande::class, function (Faker $faker) {

    return [
        'type' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Planmaintenance;
use Faker\Generator as Faker;

$factory->define(Planmaintenance::class, function (Faker $faker) {

    return [
        'titre' => $faker->word,
        'service_id' => $faker->randomDigitNotNull,
        'description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

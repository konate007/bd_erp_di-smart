<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {

    return [
        'nom_client' => $faker->word,
        'adresse' => $faker->word,
        'telephone1' => $faker->randomDigitNotNull,
        'telephone2' => $faker->randomDigitNotNull,
        'email' => $faker->word,
        'site_web' => $faker->word,
        'notes' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

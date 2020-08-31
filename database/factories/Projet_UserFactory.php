<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Projet_User;
use Faker\Generator as Faker;

$factory->define(Projet_User::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'projet_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conseiller;
use Faker\Generator as Faker;

$factory->define(Conseiller::class, function (Faker $faker) {
    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName
    ];
});

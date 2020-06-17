<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Organisation;
use Faker\Generator as Faker;

$factory->define(Organisation::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'type' => $faker->randomElement(["Entreprise", "Conseil départemental", "Pole emploi"]),
        'adresse' => $faker->address,
        'code_postal' => $faker->postcode,
        'ville' => $faker->city,
        'tel' => $faker->phoneNumber,
        'email' => $faker->email
    ];
});

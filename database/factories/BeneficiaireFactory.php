<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Beneficiaire;
use Faker\Generator as Faker;

$factory->define(Beneficiaire::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'prenom' => $faker->firstName,
        'civilite' => $faker->title,
        'tel' => $faker->phoneNumber,
        'email' => $faker->email,
        'adresse' => $faker->address,
        'code_postal' => $faker->postcode,
        'ville' => $faker->city,
        'region' => $faker->name,
        'pays' => $faker->country,
        'qpv' => $faker->randomElement(["NSP", "Oui", "Non"]),
        'territoire' => 'Territoire ' . $faker->randomDigitNotNull
    ];
});

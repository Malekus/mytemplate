<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Personne;
use Faker\Generator as Faker;

$factory->define(Personne::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'prenom' => $faker->firstName,
        'type' => $faker->randomElement(['Conseiller', 'Référent', 'Partenaire', 'Prescripteur']),
        'civilite' => $faker->title,
        'tel' => $faker->phoneNumber,
        'email' => $faker->email,
        'adresse' => $faker->address,
        'code_postal' => $faker->postcode,
        'ville' => $faker->city,
    ];
});

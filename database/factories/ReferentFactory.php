<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Referent;
use Faker\Generator as Faker;

$factory->define(Referent::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'prenom' => $faker->firstName,
        'fonction' => $faker->word,
        'civilite' => $faker->title,
        'tel' => $faker->phoneNumber,
        'email' => $faker->email,
        'adresse' => $faker->address,
        'code_postal' => $faker->postcode,
        'ville' => $faker->city,
    ];
});

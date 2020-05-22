<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prescripteur;
use Faker\Generator as Faker;

$factory->define(Prescripteur::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'adresse' => $faker->address,
        'code_postal' => $faker->postcode,
        'ville' => $faker->city,
        'tel' => $faker->phoneNumber,
        'email' => $faker->email,
        'website' => 'www.' . $faker->domainName,
        'referent_id' => \App\Referent::all()->random()->id,
    ];
});

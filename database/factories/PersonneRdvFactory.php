<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PersonneRdv;
use App\Personne;
use App\Rdv;
use Faker\Generator as Faker;

$factory->define(PersonneRdv::class, function (Faker $faker) {
    return [
        'personne_id' => Personne::all()->random()->id,
        'rdv_id' => Rdv::all()->random()->id,
    ];
});

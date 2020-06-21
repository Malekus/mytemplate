<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ParcourPersonne;
use App\Parcours;
use App\Personne;
use Faker\Generator as Faker;

$factory->define(ParcourPersonne::class, function (Faker $faker) {
    return [
        'parcour_id' => Parcours::all()->random()->id,
        'personne_id' => Personne::all()->random()->id,
    ];
});

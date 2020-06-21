<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Parcours;
use Faker\Generator as Faker;

$factory->define(Parcours::class, function (Faker $faker) {
    return [
        //'beneficiaire_id' => \App\Beneficiaire::all()->random()->id,
        'projet_id' => \App\Projet::all()->random()->id,
        //'conseiller_id' => \App\Conseiller::all()->random()->id,
        //'prescripteur_id' => \App\Prescripteur::all()->random()->id,
    ];
});

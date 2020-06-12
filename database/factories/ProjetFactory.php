<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Projet;
use Faker\Generator as Faker;

$factory->define(Projet::class, function (Faker $faker) {
    return [
        'intitule' => $faker->numberBetween($min = 10000, $max = 90000).'_'. strtoupper($faker->word)."_" . strtoupper($faker->name),
        'activite' => $faker->word,
        'description' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'date_debut' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-7 years', $timezone = null),
        'date_fin' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
        'statut' => $faker->randomElement(["En cours", "Complet", "Abandon", "Suspendu", "Annulé"]),
        //'beneficiaire_id' => \App\Beneficiaire::all()->random()->id,
        //'conseiller_id' => \App\Conseiller::all()->random()->id,
    ];
});

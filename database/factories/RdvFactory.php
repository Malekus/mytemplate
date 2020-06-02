<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rdv;
use App\Conseiller;
use App\Prestation;
use Faker\Generator as Faker;

$factory->define(Rdv::class, function (Faker $faker) {
    return [
        'date_rdv' => $faker->date,
        'heure_debut' => $faker->time,
        'heure_fin' => $faker->time,
        'libelle' => $faker->numberBetween($min = 10000, $max = 90000) . '_' . strtoupper($faker->word) . "_" . strtoupper($faker->name),
        'statut' => $faker->randomElement(["Présent", "Absent excusé", "Absent non excusé", "Pas de réponse"]),
        'motif_abs' => $faker->text($maxNbChars = 20),
        'rang_rdv' => $faker->numberBetween($min = 0, $max = 9),
        'rang_rdv_p' => $faker->numberBetween($min = 0, $max = 9),
        'prestation_id' => Prestation::all()->random()->id,
        'conseiller_id' => Conseiller::all()->random()->id
    ];
});

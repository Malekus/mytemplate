<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrganisationPersonne;
use App\Organisation;
use App\Personne;
use Faker\Generator as Faker;

$factory->define(OrganisationPersonne::class, function (Faker $faker) {
    return [
        'organisation_id' => Organisation::all()->random()->id,
        'personne_id' => Personne::all()->random()->id,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrganisationParcour;
use App\Organisation;
use App\Parcours;
use Faker\Generator as Faker;

$factory->define(OrganisationParcour::class, function (Faker $faker) {
    return [
        'organisation_id' => Organisation::all()->random()->id,
        'parcour_id' => Parcours::all()->random()->id,
    ];
});

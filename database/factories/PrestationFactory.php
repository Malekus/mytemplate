<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prestation;
use App\Parcours;
use Faker\Generator as Faker;

$factory->define(Prestation::class, function (Faker $faker) {
    return [
        'dispositif' => $faker->randomElement(["APP93", "ASP771", "ASP772", "CD771", "CD772", "RSA771", "RSA772", "TNS771", "TNS772", "TNS781", "TNS782", "TNS921", "TNS922", "VPE781", "VPE782"]),
        'statut' => $faker->randomElement(["A convoquer","Convocation 1","A reconvoquer","Convocation 2","A relancer","Suspendue","Annulée","Abandon","En cours","A cloturer","AvantTerme","Complete","Facturée"]),
        'type_sortie' => $faker->randomElement(["NSJP", "RDV non positionné", "Sans objet", "Abandon", "RenouvelAccomp", "Reorientation", "Sortie positive"]),
        'motif_sortie' => $faker->randomElement(["Maladie > 15 jours", "Longue Maladie", "Conge Maternite", "Droit clos", "NonSoumisDrtsDvrs", "DrtOuvrtVrstSusp", "RadiationRsa", "NonRespectContrat", "NonSignatureContrat", "Demenagement", "Injoignable", "Creation d'entreprise", "Recherche Formation", "Recherche Emploi", "Formation", "Emploi"]),
        'viabilite' => $faker->randomElement(["Activité viable", "Activité non viable", "Non évaluée"]),
        'delai_realisation' => $faker->randomElement(["Moins de 3 mois", "Entre 3 et 6 mois", "Entre 6 et 12 mois", "Entre 12 et 18 mois", "Entre 18 à 24 mois"]),
        'orientation' => $faker->randomElement(["MDS", "APSIE ASP", "Pole Emploi", "APSIE TNS", "Accompagnement court", "Accompagnement long", "Inventerie", "Retour référent", "EPT", "Département"]),
        'libelle' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'date_debut' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-7 years', $timezone = null),
        'date_fin' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
        'parcour_id' => Parcours::all()->random()->id
    ];
});

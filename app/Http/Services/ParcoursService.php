<?php

namespace App\Services;

use App\Beneficiaire;
use App\Conseiller;
use App\Prescripteur;
use App\Projet;

class ParcoursService
{

    public function addBeneficiaireToParcours($parcours, $request){

        $model = array_filter($request, function ($key) {
            return !strpos($key, '_beneficiaire') === false;
        }, ARRAY_FILTER_USE_KEY);

        unset($model['beneficiaire_id_beneficiaire']);

        $beneficiaire = Beneficiaire::create(array_combine(str_ireplace('_beneficiaire', '', array_keys($model)), array_values($model)));
        $parcours->beneficiaire()->associate($beneficiaire);
        return $beneficiaire;
    }

    public function addProjectToParcours($parcours, $request){

        $model = array_filter($request, function ($key) {
            return !strpos($key, '_projet') === false;
        }, ARRAY_FILTER_USE_KEY);

        unset($model['projet_id_projet']);

        $projet = Projet::create(array_combine(str_ireplace('_projet', '', array_keys($model)), array_values($model)));
        $parcours->projet()->associate($projet);
        return $projet;
    }

    public function addConseillerToParcours($parcours, $request){

        $model = array_filter($request, function ($key) {
            return !strpos($key, '_conseiller') === false;
        }, ARRAY_FILTER_USE_KEY);

        unset($model['conseiller_id_conseiller']);

        $conseiller = Conseiller::create(array_combine(str_ireplace('_conseiller', '', array_keys($model)), array_values($model)));
        $parcours->conseiller()->associate($conseiller);
        return $conseiller;
    }

    public function addPrescripteurToParcours($parcours, $request){

        $model = array_filter($request, function ($key) {
            return !strpos($key, '_prescripteur') === false;
        }, ARRAY_FILTER_USE_KEY);

        unset($model['prescripteur_id_prescripteur']);

        $prescripteur = Prescripteur::create(array_combine(str_ireplace('_prescripteur', '', array_keys($model)), array_values($model)));
        $parcours->prescripteur()->associate($prescripteur);
        return $prescripteur;
    }

}


          /* $prescripteur = Prescripteur::create(["nom" => "FakeName", "adresse" => "131 avenue de gaule",
            "code_postal" => "93240", "ville" => "Courbevoie", "tel" => "0123456789",
            "email" => "dede@toto.fr", "website" => "fakename.com",
            "referent_id" => Referent::all()->random()->id]);
        */

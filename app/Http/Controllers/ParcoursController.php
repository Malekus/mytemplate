<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParcoursRequest;
use App\Parcours;
use App\Beneficiaire;
use App\Projet;
use App\Prescripteur;
use App\Conseiller;
use App\Referent;

class ParcoursController extends Controller
{
    public function index()
    {
        $parcours = Parcours::with('beneficiaire')
            ->with('projet')
            ->with('conseiller')
            ->with('prescripteur')
            ->get();
        return view('parcours.index', compact('parcours'));
    }

    public function show($id)
    {
        $parcours = Parcours::find($id);
        return view('parcours.show', compact('parcours'));
    }

    public function create()
    {
        $beneficiaires = Beneficiaire::all()->pluck('full_name', 'id');
        $projets = Projet::all()->pluck('full_name', 'id');
        $prescripteurs = Prescripteur::all()->pluck('nom', 'id');
        $referents = Referent::all()->pluck('full_name', 'id');
        $conseillers = Conseiller::all()->pluck('full_name', 'id');
        return view('parcours.create', compact(['beneficiaires', 'projets', 'prescripteurs', 'referents', 'conseillers']));
    }

    public function store(ParcoursRequest $request)
    {
        $parcours = new Parcours();
        if (!empty($request->get('beneficiaire_id_beneficiaire'))) {
            $parcours->beneficiaire()->associate(Beneficiaire::find($request->get('beneficiaire_id_beneficiaire')));
        } else {
            $model = array_values(array_filter($request->all(), function ($key) {
                return !strpos($key, '_beneficiaire') === false;
            }, ARRAY_FILTER_USE_KEY));
            $keys = str_ireplace('_beneficiaire', '', array_keys($model));
            $values = array_values($model);
            $beneficiaire = Beneficiaire::create(array_combine($keys, $values));
            $parcours->beneficiaire()->associate($beneficiaire);
        }

        if (!empty($request->get('projet_id_projet'))) {
            $parcours->projet()->associate(Projet::find($request->get('projet_id_projet')));

        } else {
            $model = array_values(array_filter($request->all(), function ($key) {
                return !strpos($key, '_projet') === false;
            }, ARRAY_FILTER_USE_KEY));
            $keys = str_ireplace('_projet', '', array_keys($model));
            $values = array_values($model);
            $projet = Projet::create(array_combine($keys, $values));
            $parcours->projet()->associate($projet);
        }

        if (!empty($request->get('conseiller_id_conseiller'))) {
            $parcours->conseiller()->associate(Conseiller::find($request->get('conseiller_id_conseiller')));
        } else {

            $model = array_values(array_filter($request->all(), function ($key) {
                return !strpos($key, '_conseiller') === false;
            }, ARRAY_FILTER_USE_KEY));
            $keys = str_ireplace('_conseiller', '', array_keys($model));
            $values = array_values($model);
            $conseiller = Projet::create(array_combine($keys, $values));
            $parcours->conseiller()->associate($conseiller);
        }

        if (!empty($request->get('prescripteur_id_prescripteur'))) {
            $parcours->prescripteur()->associate(Prescripteur::find($request->get('prescripteur_id_prescripteur')));
        } else {
            $model = array_values(array_filter($request->all(), function ($key) {
                return !strpos($key, '_prescripteur') === false;
            }, ARRAY_FILTER_USE_KEY));
            $keys = str_ireplace('_prescripteur', '', array_keys($model));
            $values = array_values($model);
            //$prescripteur = Prescripteur::create(array_combine($keys, $values));
            $prescripteur = Prescripteur::create(["nom" => "FakeName", "adresse" => "131 avenue de gaule",
                "code_postal" => "93240", "ville" => "Courbevoie", "tel" => "0123456789",
                "email" => "dede@toto.fr", "website" => "fakename.com",
                "referent_id" => Referent::all()->random()->id]);
            $parcours->prescripteur()->associate($prescripteur);
        }

        $parcours->save();
        return redirect(route('parcours.show', $parcours));
    }

    public function edit($id)
    {
        $parcours = Parcours::find($id);
        $beneficiaires = Beneficiaire::all()->pluck('full_name', 'id');
        $projets = Projet::all()->pluck('full_name', 'id');
        $prescripteurs = Prescripteur::all()->pluck('nom', 'id');
        $conseillers = Conseiller::all()->pluck('full_name', 'id');
        return view('parcours.edit', compact(['parcours', 'beneficiaires', 'projets', 'prescripteurs', 'conseillers']));
    }

    public function update(ParcoursRequest $request, $id)
    {
        $parcours = Parcours::findOrFail($id);
        $parcours->update($request->all());
        return redirect(route('parcours.show', $id));
    }

    public function destroy($id)
    {
        Parcours::destroy($id);
        return response()->json(null, 204);
    }
}

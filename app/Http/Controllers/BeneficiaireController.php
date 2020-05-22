<?php

namespace App\Http\Controllers;

use App\Beneficiaire;
use App\Conseiller;
use App\Parcours;
use App\Prescripteur;
use App\Projet;
use App\Referent;
use Illuminate\Http\Request;

class BeneficiaireController extends Controller
{
    public function index()
    {
        $beneficiaires = Beneficiaire::with('parcours')->get();
        return view('beneficiaire.index', compact('beneficiaires'));
    }

    public function show($id)
    {
        $beneficiaire = Beneficiaire::find($id);
        return view('beneficiaire.show', compact('beneficiaire'));
    }

    public function create()
    {
        return view('beneficiaire.create');
    }

    public function store(Request $request)
    {
        $beneficiaire = $request->isMethod('put') ? Beneficiaire::findOrFail($request->id) : new Beneficiaire($request->all());
        $beneficiaire->save();
        return redirect(route('beneficiaires.show', ['beneficiaire' => $beneficiaire]));
    }

    public function edit($id)
    {
        $beneficiaire = Beneficiaire::find($id);
        return view('beneficiaire.edit', compact('beneficiaire'));
    }

    public function destroy($id)
    {
        Beneficiaire::destroy($id);
        return response()->json([], 204);
    }

    public function createProjet($beneficiaire)
    {
        $conseillers = Conseiller::all()->pluck('full_name', 'id');
        return view('beneficiaire.projet.create', compact(['conseillers', 'beneficiaire']));
    }

    public function storeProjet(Request $request)
    {
        $projet = new Projet($request->all());
        $projet->save();
        return redirect(route('beneficiaires.show', ['beneficiaire' => $projet->beneficiaire]));
    }

    public function createParcours($beneficiaire)
    {
        $projets = Projet::where('beneficiaire_id', $beneficiaire)->get()->pluck('full_name', 'id');
        $conseillers = Conseiller::all()->pluck('full_name', 'id');
        $referents = Referent::all()->pluck('full_name', 'id');
        $prescripteurs = Prescripteur::all()->pluck('full_name', 'id');
        return view('beneficiaire.parcours.create', compact(['beneficiaire', 'projets', 'conseillers', 'referents', 'prescripteurs']));
    }

    public function storeParcours(Request $request)
    {
        $arrayprescripteur = ["referent_id", "nom", "adresse", "code_postal", "ville", "tel", "email", "website"];
        $parcours = new Parcours(['beneficiaire_id' => $request->get('beneficiaire_id')]);

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
        return redirect(route('beneficiaires.show', ['beneficiaire' => $request->get('beneficiaire_id')]));
    }
}

<?php

namespace App\Http\Controllers;

use App\Beneficiaire;
use App\Personne;
use App\Projet;
use Illuminate\Http\Request;

class BeneficiaireProjetController extends Controller
{
    public function create($beneficiaire)
    {
        $personnes = Personne::all()->pluck('full_name', 'id');
        return view('beneficiaire.projet.create', compact(['personnes', 'beneficiaire']));
    }

    public function store(Request $request)
    {
        $projet = new Projet($request->except(['beneficiaire_id']));
        $projet->beneficiaire()->associate(Beneficiaire::find($request->get('beneficiaire_id')));
        $projet->save();
        return redirect(route('beneficiaires.show', ['beneficiaire' => $request->get('beneficiaire_id')]));
    }

}

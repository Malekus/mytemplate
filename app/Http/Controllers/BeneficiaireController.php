<?php

namespace App\Http\Controllers;

use App\Beneficiaire;
use App\Conseiller;
use App\Parcours;
use App\Prescripteur;
use App\Projet;
use App\Referent;
use App\Services\ParcoursService;
use Illuminate\Http\Request;

class BeneficiaireController extends Controller
{
    private $parcoursService;

    public function __construct(ParcoursService $service)
    {
        $this->parcoursService = $service;
    }

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

    public function update(Request $request, $id)
    {
        $beneficiaire = Beneficiaire::findOrFail($id);
        $beneficiaire->update($request->all());
        return redirect(route('beneficiaires.show', $beneficiaire));
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
        //dd($request->get('beneficiaire_id'));
        $parcours = new Parcours(['beneficiaire_id' => $request->get('beneficiaire_id')]);

        if (!empty($request->get('projet_id_projet')))
            $parcours->projet()->associate(Projet::find($request->get('projet_id_projet')));
        else
            $this->parcoursService->addProjectToParcours($parcours, $request->all());

        if (!empty($request->get('conseiller_id_conseiller')))
            $parcours->conseiller()->associate(Conseiller::find($request->get('conseiller_id_conseiller')));
        else
            $this->parcoursService->addConseillerToParcours($parcours, $request->all());

        if (!empty($request->get('prescripteur_id_prescripteur')))
            $parcours->prescripteur()->associate(Prescripteur::find($request->get('prescripteur_id_prescripteur')));
        else
            $this->parcoursService->addPrescripteurToParcours($parcours, $request->all());

        $parcours->save();
        return redirect(route('beneficiaires.show', ['beneficiaire' => $request->get('beneficiaire_id')]));
    }
}

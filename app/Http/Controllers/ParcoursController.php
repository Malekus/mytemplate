<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParcoursRequest;
use App\Parcours;
use App\Beneficiaire;
use App\Projet;
use App\Prescripteur;
use App\Conseiller;
use App\Referent;
use App\Services\ParcoursService;

class ParcoursController extends Controller
{
    private $parcoursService;

    public function __construct(ParcoursService $service)
    {
        $this->parcoursService = $service;
    }

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

        if (!empty($request->get('beneficiaire_id_beneficiaire')))
            $parcours->beneficiaire()->associate(Beneficiaire::find($request->get('beneficiaire_id_beneficiaire')));
        else{
            $beneficiaire = $this->parcoursService->addBeneficiaireToParcours($parcours, $request->all());
            $request->merge(['beneficiaire_id_projet' => $beneficiaire->id]);
        }

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

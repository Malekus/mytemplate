<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjetRequest;
use App\Personne;
use App\Projet;
use App\Conseiller;


class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::with('conseiller')->get();
        return view('projet.index', compact('projets'));
    }

    public function show($id)
    {
        $projet = Projet::find($id);
        return view('projet.show', compact('projet'));
    }

    public function create()
    {
        $personnes = Personne::all()->pluck('full_name', 'id');
        return view('projet.create', compact(['personnes']));
    }

    public function store(ProjetRequest $request)
    {
        $projet = new Projet($request->all());
        $projet->save();
        return redirect(route('projets.show', ['projet' => $projet]));
    }

    public function edit($id)
    {
        $projet = Projet::find($id);
        return view('projet.edit', compact(['projet']));
    }

    public function update(ProjetRequest $request, $id)
    {
        $projet = Projet::findOrFail($id);
        $projet->update($request->all());
        return redirect(route('beneficiaires.show', $projet->beneficiaire->id));
    }

    public function destroy($id)
    {
        Projet::destroy($id);
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjetRequest;
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
        $conseillers = Conseiller::all()->pluck('full_name', 'id');
        $beneficiaires = Conseiller::all()->pluck('full_name', 'id');
        return view('projet.create', compact(['conseillers', 'beneficiaires']));
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
        $conseillers = Conseiller::all()->pluck('full_name', 'id');
        $beneficiaires = Conseiller::all()->pluck('full_name', 'id');
        return view('projet.edit', compact(['projet', 'conseillers', 'beneficiaires']));
    }

    public function update(ProjetRequest $request, $id)
    {
        $projet = Projet::findOrFail($id);
        $projet->update($request->all());
        return redirect(route('projets.show', $id));
    }

    public function destroy($id)
    {
        Projet::destroy($id);
        return response()->json(null, 204);
    }
}

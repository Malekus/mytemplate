<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrescripteurRequest;
use App\Prescripteur;
use App\Referent;

class PrescripteurController extends Controller
{
    public function index()
    {
        $prescripteurs = Prescripteur::all();
        return view('prescripteur.index', compact('prescripteurs'));
    }

    public function show($id)
    {
        $prescripteur = Prescripteur::find($id);
        return view('prescripteur.show', compact('prescripteur'));
    }

    public function create()
    {
        $referents = Referent::all()->pluck('full_name', 'id');
        return view('prescripteur.create', compact(['referents']));
    }

    public function store(PrescripteurRequest $request)
    {
        $prescripteur = new Prescripteur($request->all());
        $prescripteur->save();
        return redirect(route('prescripteurs.show', ['prescripteur' => $prescripteur]));
    }

    public function edit($id)
    {
        $prescripteur = Prescripteur::find($id);
        return view('prescripteur.edit', compact('prescripteur'));
    }

    public function update(PrescripteurRequest $request, $id)
    {
        $prescripteur = Prescripteur::findOrFail($id);
        $prescripteur->update($request->all());
        return redirect(route('prescripteurs.show', $id));
    }

    public function destroy($id)
    {
        Prescripteur::destroy($id);
        return response()->json(null, 204);
    }
}

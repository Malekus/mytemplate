<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonneRequest;
use App\Personne;

class PersonneController extends Controller
{
    public function index()
    {
        $personnes = Personne::all();
        return view('personne.index', compact('personnes'));
    }

    public function show($id)
    {
        $personne = Personne::find($id);
        return view('personne.show', compact('personne'));
    }

    public function create()
    {
        return view('personne.create');
    }

    public function store(PersonneRequest $request)
    {
        $personne = new Personne($request->all());
        $personne->save();
        return redirect(route('personnes.show', ['personne' => $personne]));
    }

    public function edit($id)
    {
        $personne = Personne::find($id);
        return view('personne.edit', compact('personne'));
    }

    public function update(PersonneRequest $request, $id)
    {
        $personne = Personne::findOrFail($id);
        $personne->update($request->all());
        return redirect(route('personnes.show', $id));
    }

    public function destroy($id)
    {
        Personne::destroy($id);
        return response()->json(null, 204);
    }
}

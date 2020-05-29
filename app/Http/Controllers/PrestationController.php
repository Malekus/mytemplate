<?php

namespace App\Http\Controllers;

use App\Beneficiaire;
use App\Http\Requests\PrestationRequest;
use App\Prestation;
use App\Parcours;
use App\Rdv;

class PrestationController extends Controller
{
    public function index()
    {
        $prestations = Prestation::all();
        return view('prestation.index', compact('prestations'));
    }

    public function show($id)
    {
        $prestation = Prestation::find( $id);
        $rdv = Rdv::find(5);
        return view('prestation.show', compact('prestation'));
    }

    public function create($parcours)
    {
        return view('prestation.create', compact('parcours'));
    }

    public function store(PrestationRequest $request)
    {
        $prestation = new Prestation($request->all());
        $prestation->save();
        return redirect(route('beneficiaires.show', ['beneficiaire' => Parcours::find($request->get('parcour_id'))->beneficiaire->id]));
    }

    public function edit($id)
    {
        $prestation = Prestation::find($id);
        return view('prestation.edit', compact('prestation'));
    }

    public function update(PrestationRequest $request, $id)
    {
        $prestation = Prestation::findOrFail($id);
        $prestation->update($request->all());
        return redirect(route('prestations.show', $id));
    }

    public function destroy($id)
    {
        Prestation::destroy($id);
        return response()->json(null, 204);
    }

    public function manage($id)
    {
        $prestation = Prestation::findOrFail($id);
        return view('prestation.modal', compact('prestation'));
    }

}

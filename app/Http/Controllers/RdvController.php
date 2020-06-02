<?php

namespace App\Http\Controllers;

use App\Conseiller;
use App\Http\Requests\RdvRequest;
use App\Prestation;
use App\Rdv;
use Illuminate\Http\Request;

class RdvController extends Controller
{
    public function index()
    {
        $rdvs = Rdv::all();
        return view('rdv.index', compact('rdvs'));
    }

    public function show($id)
    {
        $rdv = Rdv::find($id);
        return view('rdv.show', compact('rdv'));
    }

    public function create($id)
    {
        $conseillers = Conseiller::all()->pluck('full_name', 'id');
        return view('rdv.create', ['conseillers' => $conseillers, 'prestation' => $id]);
    }

    public function store(RdvRequest $request)
    {
        //dd($request->all());
        $rdv = new Rdv($request->except(['prestation_id', 'conseiller_id']));
        $rdv->prestation()->associate(Prestation::find($request->get('prestation_id')));
        $rdv->conseiller()->associate(Conseiller::find($request->get('conseiller_id')));
        $rdv->save();
        return redirect(route('prestations.show', ['prestation' => $request->get('prestation_id')]));
    }

    public function edit($id)
    {
        $rdv = Rdv::find($id);
        $conseillers = Conseiller::all()->pluck('full_name', 'id');
        return view('rdv.edit', ['conseillers' => $conseillers, 'rdv' => $rdv]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $rdv = Rdv::findOrFail($id);
        $rdv->update($request->except('conseiller_id'));
        $rdv->conseiller()->associate(Conseiller::find($request->get('conseiller_id')));
        //dd($rdv);
        return redirect(route('prestations.show', ['prestation' => $rdv->prestation->id]));
    }

    public function destroy($id)
    {
        Rdv::destroy($id);
        return response()->json(null, 204);
    }
}

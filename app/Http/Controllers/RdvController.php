<?php

namespace App\Http\Controllers;

use App\Http\Requests\RdvRequest;
use App\Conseiller;
use App\Rdv;

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
        $rdv = new Rdv($request->all());
        $rdv->save();
        return redirect(route('rdvs.show', ['rdv' => $rdv]));
    }

    public function edit($id)
    {
        $rdv = Rdv::find($id);
        return view('rdv.edit', compact('rdv'));
    }

    public function update(RdvRequest $request, $id)
    {
        $rdv = Rdv::findOrFail($id);
        $rdv->update($request->all());
        return redirect(route('rdvs.show', $id));
    }

    public function destroy($id)
    {
        Rdv::destroy($id);
        return response()->json(null, 204);
    }
}

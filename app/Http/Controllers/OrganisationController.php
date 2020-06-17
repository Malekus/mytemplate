<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganisationRequest;
use App\Organisation;

class OrganisationController extends Controller
{
    public function index()
    {
        $organisations = Organisation::all();
        return view('organisation.index', compact('organisations'));
    }

    public function show($id)
    {
        $organisation = Organisation::find($id);
        return view('organisation.show', compact('organisation'));
    }

    public function create()
    {
        return view('organisation.create');
    }

    public function store(OrganisationRequest $request)
    {
        $organisation = new Organisation($request->all());
        $organisation->save();
        return redirect(route('organisations.show', ['organisation' => $organisation]));
    }

    public function edit($id)
    {
        $organisation = Organisation::find($id);
        return view('organisation.edit', compact('organisation'));
    }

    public function update(OrganisationRequest $request, $id)
    {
        $organisation = Organisation::findOrFail($id);
        $organisation->update($request->all());
        return redirect(route('organisations.show', $id));
    }

    public function destroy($id)
    {
        Organisation::destroy($id);
        return response()->json(null, 204);
    }
}

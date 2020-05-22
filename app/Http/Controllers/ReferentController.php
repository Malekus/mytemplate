<?php

namespace App\Http\Controllers;

use App\Referent;
use Illuminate\Http\Request;

class ReferentController extends Controller
{
    public function index()
    {
        $referents = Referent::all();
        return view('referent.index', compact('referents'));
    }

    public function show($id)
    {
        $referent = Referent::find($id);
        return view('referent.show', compact('referent'));
    }

    public function create()
    {
        return view('referent.create');
    }

    public function store(Request $request)
    {
        $referent = new Referent($request->all());
        $referent->save();
        return redirect(route('referents.show', ['referent' => $referent]));
    }

    public function update(Request $request, $id)
    {
        $referent = Referent::findOrFail($id);
        $referent->update($request->all());
        return redirect(route('referents.show', $id));
    }

    public function edit($id)
    {
        $referent = Referent::find($id);
        return view('referent.edit', compact('referent'));
    }

    public function destroy($id)
    {
        Referent::destroy($id);
        return response()->json(null, 204);
    }
}

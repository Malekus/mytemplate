<?php

namespace App\Http\Controllers;

use App\Conseiller;
use Illuminate\Http\Request;

class ConseillerController extends Controller
{

    public function index()
    {
        $conseillers = Conseiller::all();
        return view('conseiller.index', compact('conseillers'));
    }

    public function show($id)
    {
        $conseiller = Conseiller::find($id);
        return view('conseiller.show', compact('conseiller'));
    }

    public function create()
    {
        return view('conseiller.create');
    }

    public function store(Request $request)
    {
        $conseiller = $request->isMethod('put') ? Conseiller::findOrFail($request->id) : new Conseiller($request->all());
        $conseiller->save();
        return redirect(route('conseillers.show', ['conseiller' => $conseiller]));
    }

    public function edit($id)
    {
        $conseiller = Conseiller::find($id);
        return view('conseiller.edit', compact('conseiller'));
    }

    public function destroy($id)
    {
        Conseiller::destroy($id);
        return response()->json([], 204);
    }
}

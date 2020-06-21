<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfigurationRequest;
use App\Configuration;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configurations = Configuration::all();
        return view('configuration.index', compact('configurations'));
    }

    public function show($id)
    {
        $configuration = Configuration::find($id);
        return view('configuration.show', compact('configuration'));
    }

    public function create()
    {
        return view('configuration.create');
    }

    public function store(ConfigurationRequest $request)
    {
        $configuration = new Configuration($request->all());
        $configuration->save();
        return redirect(route('configurations.index', ['configurations' => Configuration::all()]));
    }

    public function edit($id)
    {
        $configuration = Configuration::find($id);
        return view('configuration.edit', compact('configuration'));
    }

    public function update(ConfigurationRequest $request, $id)
    {
        $configuration = Configuration::findOrFail($id);
        $configuration->update($request->all());
        return redirect(route('configurations.show', $id));
    }

    public function destroy($id)
    {
        Configuration::destroy($id);
        return response()->json(null, 204);
    }
}

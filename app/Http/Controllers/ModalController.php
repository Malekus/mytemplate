<?php

namespace App\Http\Controllers;

use App\Beneficiaire;
use App\Projet;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function show($model, $action, $id)
    {
        $model = ucfirst($$model)::find($id);
        return view('modal.show', ['titre' => 'Afficher la prestation', 'model' => $model]);
    }
}

<?php

namespace App\Http\Controllers;


use App\Beneficiaire;
use App\Projet;
use App\Prestation;


class HomeController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $beneficiaires = Beneficiaire::all();
        $projets = Projet::all();
        $prestations = Prestation::all();
        $rdvs = 150;
        return view('home.index', compact(['beneficiaires', 'projets', 'prestations', 'rdvs']));
    }
}

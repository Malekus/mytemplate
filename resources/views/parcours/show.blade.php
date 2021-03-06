@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Afficher le parcours</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="card-title mt-0">Bénéficiaire</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nom</strong> : <a href="{{ route('beneficiaires.show', $beneficiaire) }}">{{ $beneficiaire->full_name }}</a></li>
                    <li class="list-group-item"><strong>Prénom</strong> : {{ $beneficiaire->prenom }}</li>
                    <li class="list-group-item"><strong>Téléphone</strong> : {{ $beneficiaire->tel }}</li>
                    <li class="list-group-item"><strong>Email</strong> : {{ $beneficiaire->email }}</li>
                    <li class="list-group-item"><strong>Adresse</strong> : {{ $beneficiaire->adresse }}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="card-title mt-0">Projet</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Intitulé</strong> : {{ $parcours->projet->intitule }}</li>
                    <li class="list-group-item"><strong>Activité</strong> : {{ $parcours->projet->activite }}</li>
                    <li class="list-group-item"><strong>Description</strong> : {{ $parcours->projet->description }}</li>
                    <li class="list-group-item"><strong>Date de début</strong>
                        : {{ \Carbon\Carbon::parse($parcours->projet->date_debut)->format('d/m/Y') }}</li>
                    <li class="list-group-item"><strong>Statut</strong> : {{ $parcours->projet->statut }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection


{{--
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="card-title mt-0">Bénéficiaire</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nom</strong> : <a href="{{ route('beneficiaires.show', $parcours->beneficiaire->id) }}">{{ $parcours->beneficiaire->nom }}</a></li>
                    <li class="list-group-item"><strong>Prénom</strong> : {{ $parcours->beneficiaire->prenom }}</li>
                    <li class="list-group-item"><strong>Téléphone</strong> : {{ $parcours->beneficiaire->tel }}</li>
                    <li class="list-group-item"><strong>Email</strong> : {{ $parcours->beneficiaire->email }}</li>
                    <li class="list-group-item"><strong>Adresse</strong> : {{ $parcours->beneficiaire->adresse }}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="card-title mt-0">Projet</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Intitulé</strong> : {{ $parcours->projet->intitule }}</li>
                    <li class="list-group-item"><strong>Activité</strong> : {{ $parcours->projet->activite }}</li>
                    <li class="list-group-item"><strong>Description</strong> : {{ $parcours->projet->description }}</li>
                    <li class="list-group-item"><strong>Date de début</strong>
                        : {{ \Carbon\Carbon::parse($parcours->projet->date_debut)->format('d/m/Y') }}</li>
                    <li class="list-group-item"><strong>Statut</strong> : {{ $parcours->projet->statut }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="card-title mt-0">Conseiller</h3>
                <li class="list-group-item"><strong>Nom</strong> : {{ $parcours->conseiller->nom }}</li>
                <li class="list-group-item"><strong>Prénom</strong> : {{ $parcours->conseiller->prenom }}</li>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="card-title mt-0">Prescripteur</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nom</strong> : {{ $parcours->prescripteur->nom }}</li>
                    <li class="list-group-item"><strong>Téléphone</strong> : {{ $parcours->prescripteur->tel }}</li>
                    <li class="list-group-item"><strong>Email</strong> : {{ $parcours->prescripteur->email }}</li>
                    <li class="list-group-item"><strong>Ville</strong> : {{ $parcours->prescripteur->ville }}</li>
                    <li class="list-group-item"><strong>Référent</strong> : {{ $parcours->prescripteur->referent->full_name }}</li>
                </ul>
            </div>
        </div>
    </div>
--}}

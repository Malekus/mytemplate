@extends('layouts.master')

@section('css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">{{ $organisation->nom }}</h4>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="float-right d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-settings mr-2"></i> Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route("organisations.edit", $organisation) }}">Modifier l'organisation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nom de l'organisation</strong> : {{ $organisation->nom }}</li>
                                <li class="list-group-item"><strong>Téléphone</strong> : {{ $organisation->tel }}</li>
                                <li class="list-group-item"><strong>Email</strong> : {{ $organisation->email }}</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Crée le</strong> : {{ \Carbon\Carbon::parse($organisation->created_at)->format('d/m/Y') }}</li>
                                <li class="list-group-item"><strong>Dernière activité</strong> : {{ \Carbon\Carbon::parse($organisation->updated_at)->format('d/m/Y') }}</li>
                                <li class="list-group-item"><strong>Nombre de personnes</strong> : {{ $organisation->personnes->count() }}</li>
                                <li class="list-group-item"><strong>Nombre de parcours</strong> : {{ $organisation->parcours->count() }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- start page -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabPersonne" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block mx-4">Personnes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabParcour" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block mx-4">Parcours</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="tabPersonne" role="tabpanel">
                            @if ($organisation->personnes->count() !== 0)
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($organisation->personnes as $personne)
                                        <tr>
                                            <td>{{ $personne->nom }}</td>
                                            <td>{{ $personne->prenom }}</td>
                                            <td>{{ $personne->type }}</td>
                                            <td>Action</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                Aucun projet
                            @endif
                        </div>
                        <div class="tab-pane p-3" id="tabParcour" role="tabpanel">
                            @if ($organisation->parcours->count() !== 0)
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Projet</th>
                                        <th>Conseiller</th>
                                        <th>Prescripteur</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($organisation->parcours as $parcour)
                                        <tr>
                                            <td>{{ $parcour->projet->full_name }}</td>
                                            <td>{{ $parcour->conseiller->full_name }}</td>
                                            <td>{{ $parcour->prescripteur->full_name }}</td>
                                            <td>Action</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                Aucun entreprise
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page -->

@endsection

@section('script')

@endsection

{{--
https://makitweb.com/dynamically-load-content-in-bootstrap-modal-with-ajax/

--}}

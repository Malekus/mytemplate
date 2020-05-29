@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Prestation</h4>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="float-right d-none d-md-block ml-2">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-settings mr-2"></i> Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('rdvs.create.prestations', $prestation) }}">Ajouter un rendez-vous</a>
                    </div>
                </div>
            </div>

            <div class="float-right d-none d-md-block ml-2">
                <a class="btn btn-info" href="{{ route('beneficiaires.show', $prestation->parcour->beneficiaire->id) }}">Retourner au bénéficiaire</a>
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
                                <li class="list-group-item"><strong>Nom du bénéficiaire</strong> : {{ $prestation->parcour->beneficiaire->full_name }}</li>
                                <li class="list-group-item"><strong>dispositif</strong> : {{ $prestation->dispositif }}
                                </li>
                                <li class="list-group-item"><strong>statut</strong> : {{ $prestation->statut }}</li>
                                <li class="list-group-item"><strong>type_sortie</strong>
                                    : {{ $prestation->type_sortie }}</li>
                                <li class="list-group-item"><strong>motif_sortie</strong>
                                    : {{ $prestation->motif_sortie }}</li>
                                <li class="list-group-item"><strong>viabilite</strong> : {{ $prestation->viabilite }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>delai_realisation</strong>
                                    : {{ $prestation->delai_realisation }}</li>
                                <li class="list-group-item"><strong>orientation</strong>
                                    : {{ $prestation->orientation }}</li>
                                <li class="list-group-item"><strong>libelle le</strong> : {{ $prestation->libelle}}</li>
                                <li class="list-group-item"><strong>date_debut activité</strong>
                                    : {{ \Carbon\Carbon::parse($prestation->date_debut)->format('d/m/Y') }}</li>
                                <li class="list-group-item"><strong>date_fin de parcours</strong>
                                    : {{ \Carbon\Carbon::parse($prestation->date_fin)->format('d/m/Y') }}</li>
                                <li class="list-group-item"><strong>rdv_max</strong> : {{ $prestation->rdv_max }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    @if($prestation->rendezvous->count() !== 0)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-title-box">
                            <h4 class="font-size-18">Rendez-vous</h4>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Date du rendez-vous</th>
                                <th>Heure Début</th>
                                <th>Heure Fin</th>
                                <th>Conseiller</th>
                                <th>Libellé</th>
                                <th>Statut</th>
                                <th>Motif absence</th>
                                <th>Rang</th>
                                <th>RangR</th>
                                <th>Rdv A</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prestation->rendezvous as $rdv)
                                <tr>
                                    <td>{{ $rdv->date_rdv }}</td>
                                    <td>{{ $rdv->heure_debut }}</td>
                                    <td>{{ $rdv->heure_fin }}</td>
                                    <td>{{ $rdv->conseiller->full_name }}</td>
                                    <td>{{ $rdv->libelle }}</td>
                                    <td>{{ $rdv->status }}</td>
                                    <td>{{ $rdv->motif_abs }}</td>
                                    <td>{{ $rdv->rang_rdv }}</td>
                                    <td>{{ $rdv->rang_rdv_p }}</td>
                                    <td>{{ $rdv->getNbrdv() }} - {{ $rdv->prestation->id }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Modifier</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    @endif

@endsection

@section('script')

@endsection

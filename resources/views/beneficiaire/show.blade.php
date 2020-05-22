@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">{{ $beneficiaire->nom }} {{ $beneficiaire->prenom }} </h4>
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
                        <a class="dropdown-item" href="{{ route("beneficiaires.edit", $beneficiaire) }}">Modifier le
                            bénéficiaire</a>
                        <a class="dropdown-item" href="#">Supprimer le bénéficiaire</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('beneficiaires.create.parcours', $beneficiaire) }}">Ajouter un parcours</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('beneficiaires.create.projets', $beneficiaire) }}">Ajouter
                            un projet</a>
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
                                <li class="list-group-item"><strong>Nom</strong> : {{ $beneficiaire->nom }}</li>
                                <li class="list-group-item"><strong>Prénom</strong> : {{ $beneficiaire->prenom }}</li>
                                <li class="list-group-item"><strong>Civilité</strong> : {{ $beneficiaire->civilite }}
                                </li>
                                <li class="list-group-item"><strong>Téléphone</strong> : {{ $beneficiaire->tel }}</li>
                                <li class="list-group-item"><strong>Email</strong> : {{ $beneficiaire->email }}</li>
                                <li class="list-group-item"><strong>Adresse</strong> : {{ $beneficiaire->adresse }}</li>
                            </ul>
                        </div>

                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Entreprise</strong> : {{ $beneficiaire->nom }}</li>
                                <li class="list-group-item"><strong>Crée le</strong>
                                    : {{ \Carbon\Carbon::parse($beneficiaire->created_at)->format('d/m/Y') }}</li>
                                <li class="list-group-item"><strong>Dernière activité</strong>
                                    : {{ \Carbon\Carbon::parse($beneficiaire->updated_at)->format('d/m/Y') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Projets</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Entreprises</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="home2" role="tabpanel">
                            @if (isset($beneficiaire->projets))

                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Intitulé</th>
                                            <th>Activité</th>
                                            <th>Description</th>
                                            <th>Date de début</th>
                                            <th>Date de fin</th>
                                            <th>Statut</th>
                                            <th>Conseiller</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($beneficiaire->projets as $projet)
                                            <tr>
                                                <td>{{ $projet->intitule }}</td>
                                                <td>{{ $projet->activite }}</td>
                                                <td>{{ $projet->description }}</td>
                                                <td>{{ $projet->date_debut }}</td>
                                                <td>{{ $projet->date_fin }}</td>
                                                <td>{{ $projet->statut }}</td>
                                                <td>{{ $projet->conseiller->full_name }}</td>
                                                <td>Action</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            @else
                                Aucun projet
                            @endif
                        </div>
                        <div class="tab-pane p-3" id="profile2" role="tabpanel">
                            @if (isset($beneficiaire->entreprises))
                                {{ $beneficiaire->entreprises }}
                            @else
                                Aucun entreprise
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @empty($beneficiaire->parcours)
    @endempty
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-title-box">
                        <h4 class="font-size-18">Parcours</h4>
                    </div>
                    <div id="accordion">
                        @foreach($beneficiaire->parcours as $parcours)
                            <div class="card mb-1">
                                <div class="card-header p-3" id="{{ 'heading'.$parcours->id  }}">
                                    <div class="d-flex justify-content-between align-items-center flex-nowrap">
                                        <div class="">
                                            <h6 class="m-0 font-14">
                                                <a href="{{ '#collapse'.$parcours->id  }}" class="text-dark"
                                                   data-toggle="collapse"
                                                   aria-expanded="false"
                                                   aria-controls="{{ 'collapse'.$parcours->id  }}">
                                                    Intitulé : {{ $parcours->projet->intitule  }}
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('prestations.create', $parcours) }}"
                                               class="btn btn-success">Ajouter une prestation</a>
                                        </div>
                                    </div>

                                </div>
                                <div id="{{ 'collapse'.$parcours->id  }}" class="collapse"
                                     aria-labelledby="{{ 'heading'.$parcours->id  }}" data-parent="#accordion">
                                    <div class="card-body">
                                        @forelse ($parcours->prestations as $prestation)
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                <tr>
                                                    <th>Dispositif</th>
                                                    <th>Statut</th>
                                                    <th>Type de sortie</th>
                                                    <th>Motif de sortie</th>
                                                    <th>Viabilité</th>
                                                    <th>Délai de réalisation</th>
                                                    <th>Orientation</th>
                                                    <th>Libellé</th>
                                                    <th>Date de début</th>
                                                    <th>Date de fin</th>
                                                    <th>Rendez-vous</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>{{ $prestation->dispositif }}</td>
                                                    <td>{{ $prestation->statut }}</td>
                                                    <td>{{ $prestation->type_sortie }}</td>
                                                    <td>{{ $prestation->motif_sortie }}</td>
                                                    <td>{{ $prestation->viabilite }}</td>
                                                    <td>{{ $prestation->delai_realisation }}</td>
                                                    <td>{{ $prestation->orientation }}</td>
                                                    <td>{{ $prestation->libelle ? $beneficiaire->libelle : ""}}</td>
                                                    <td>{{ $prestation->date_debut }}</td>
                                                    <td>{{ $prestation->date_fin }}</td>
                                                    <td>Rendez vous en cours</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        @empty
                                            <p>Aucune prestation</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection

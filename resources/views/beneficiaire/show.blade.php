@extends('layouts.master')

@section('css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
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
                        <a class="dropdown-item" href="{{ route('beneficiaires.projets.create', $beneficiaire) }}">Ajouter
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
                                <li class="list-group-item"><strong>Nom du bénéficiaire</strong> : {{ $beneficiaire->civilite }} {{ $beneficiaire->full_name }}</li>
                                <li class="list-group-item"><strong>Téléphone</strong> : {{ $beneficiaire->tel }}</li>
                                <li class="list-group-item"><strong>Email</strong> : {{ $beneficiaire->email }}</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Crée le</strong> : {{ \Carbon\Carbon::parse($beneficiaire->created_at)->format('d/m/Y') }}</li>
                                <li class="list-group-item"><strong>Dernière activité</strong> : {{ \Carbon\Carbon::parse($beneficiaire->updated_at)->format('d/m/Y') }}</li>
                                <li class="list-group-item"><strong>Nombre de parcours</strong> : A FAIRE</li>
                                {{--
                                <li class="list-group-item"><strong>Nombre de parcours</strong> : {{ $beneficiaire->parcours->count() }}</li>
                                --}}
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
                            <a class="nav-link active" data-toggle="tab" href="#tabProjet" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block mx-4">Projets</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabEntreprise" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block mx-4">Entreprises</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabParcours" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block mx-4">Parcours</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabPrestation" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block mx-4">Prestations</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabRdv" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block mx-4">Rendez-vous</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="tabProjet" role="tabpanel">
                            @if ($beneficiaire->projets->count() !== 0)
                                <table class="table table-bordered mb-0" id="tableProjet">
                                    <thead>
                                    <tr>
                                        <th>Intitulé</th>
                                        <th>Activité</th>
                                        <th>Description</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Statut</th>
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
                                            <td class="text-center">
                                                <a class="btn btn-primary" href="{{ route("projets.edit", $projet) }}">Modifier</a>
                                                <button class="btn btn-danger sa-warning" id="{{ $projet->id }}" data-entity="Projet">Supprimer</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>


                            @else
                                Aucun projet
                            @endif
                        </div>
                        <div class="tab-pane p-3" id="tabEntreprise" role="tabpanel">
                            @if (isset($beneficiaire->entreprises))
                                {{ $beneficiaire->entreprises }}
                            @else
                                Aucun entreprise
                            @endif
                        </div>
                        <div class="tab-pane p-3" id="tabParcours" role="tabpanel">
                            @if (isset($beneficiaire->parcours))
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Projet</th>
                                        <th>id Parcours</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($beneficiaire->parcours as $parcour)
                                        <tr>
                                            <td>{{ $parcour->projet->intitule }}</td>
                                            <td>{{ $parcour->id }}</td>
                                            <td class="text-center">
                                                <a class="btn btn-success" href="{{ route("parcours.show", $parcour) }}">Afficher</a>
                                                <a class="btn btn-primary" href="{{ route("parcours.edit", $parcour) }}">Modifier</a>
                                                <button class="btn btn-danger sa-warning" id="{{ $parcour->id }}">Supprimer</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                Aucun parcours
                            @endif
                        </div>
                        <div class="tab-pane p-3" id="tabPrestation" role="tabpanel">
                            @if (isset($beneficiaire->entreprises))
                                {{ $beneficiaire->entreprises }}
                            @else
                                Aucune prestation
                            @endif
                        </div>
                        <div class="tab-pane p-3" id="tabRdv" role="tabpanel">
                            @if (isset($beneficiaire->entreprises))
                                {{ $beneficiaire->entreprises }}
                            @else
                                Aucun rendez-vous
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page -->

    {{--
    @if($beneficiaire->parcours->count() != 0)
        <div class="row" id="displayParcours">
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
                                            <div>
                                                <a href="{{ route('prestations.create.parcours', $parcours) }}"
                                                   class="btn btn-success">Ajouter une prestation</a>
                                                <a href="#"
                                                   class="btn btn-primary">Modifier le parcours</a>
                                                <button class="btn btn-danger sa-warning" id="{{ $parcours->id }}">Supprimer le parcours</button>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="{{ 'collapse'.$parcours->id  }}" class="collapse"
                                         aria-labelledby="{{ 'heading'.$parcours->id  }}" data-parent="#accordion">
                                        <div class="card-body">
                                            @if($parcours->prestations->count() != 0)
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Dispositif</th>
                                                        <th>Statut</th>
                                                        <th>Viabilité</th>
                                                        <th>Date de début</th>
                                                        <th>Date de fin</th>
                                                        <th>Nombre de rendez-vous</th>
                                                        <th>Rendez-vous restant</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($parcours->prestations as $prestation)
                                                        <tr>
                                                            <td>{{ $prestation->dispositif }}</td>
                                                            <td>{{ $prestation->statut }}</td>
                                                            <td>{{ $prestation->viabilite }}</td>
                                                            <td>{{ $prestation->date_debut }}</td>
                                                            <td>{{ $prestation->date_fin }}</td>
                                                            <td>{{ $prestation->rdv_max }}</td>
                                                            <td>{{ $prestation->rdv_max - $prestation->rendezvous->count() }}</td>
                                                            <td class="text-center">
                                                             <button class="btn btn-warning" data-model="prestation" data-action="show" data-id="{{ $prestation->id }}" data-toggle="modal" data-target=".modal-lg-content">Gérer</button>
                                                                <a class="btn btn-success" href="{{ route("prestations.show", $prestation) }}">Afficher</a>
                                                                <a class="btn btn-primary" href="{{ route("prestations.edit", $prestation) }}">Modifier</a>
                                                                <a class="btn btn-danger" href="#">Supprimer</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <p>Aucune prestation</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    --}}
@endsection

@section('script')
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>

    <script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script>

    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.sa-warning').click(function () {
            if($(this).data('entity') === "Projet"){
                var entity = $(this).data('entity').toLowerCase();
                var url = '{{ url('/-models/:models')}}';
                //url = url.replace(':projets', $(this).attr('id'));
                url = url.replace('-models', entity + 's');
                url = url.replace(':models', $(this).attr('id'));
                var row = $(this).closest("tr");

                Swal.fire({
                    title: "Voulez vous supprimer ce " + entity + " ?",
                    text: "Vous ne pourrez pas revenir en arrière !",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#34c38f",
                    cancelButtonColor: "#f46a6a",
                    confirmButtonText: "Supprimer",
                    cancelButtonText: "Annuler"
                }).then(function (result) {
                    if (result.value) {
                        $.ajax({
                            url: url,
                            method : "delete",
                            success: function (data) {
                                row.remove();
                                if($('#tableProjet tbody').html().trim() === "") $("#tabProjet").html("Aucun " + entity);
                                Swal.fire("Supprimé !", "Le " + entity + " a été supprimé.", "success");
                            },
                            error: function (data) {
                                console.log("fail" + data);
                                Swal.fire("Oups !", "Problème provenant du serveur.", "error");
                            }
                        });

                    }
                });

            }
            else {

            }

        });

        $('.btn.btn-warning').click(function () {
            console.log("dede", $(this).data('model'), $(this).data('action'), $(this).data('id'))
            var url = '{{ url('/prestations/modal/:prestation')}}';
            url = url.replace(':prestation', $(this).data('id'));
            console.log(url)
            //return
            $.ajax({
                url: url,
                method : "get",
                success: function (data) {
                    $('#modal-wrapper .modal-lg-content .modal-dialog').html(data);
                    $(".modal-lg-content").modal();
                },
                error: function (data) {
                    console.log("fail" + data);
                }
            });

            return;
        });
    </script>
@endsection

{{--
<div class="tab-content">
                        <div class="tab-pane active p-3" id="tabProjet" role="tabpanel">
                            @if ($beneficiaire->projets->count() !== 0)
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
                        <div class="tab-pane p-3" id="tabEntreprise" role="tabpanel">
                            @if (isset($beneficiaire->entreprises))
                                {{ $beneficiaire->entreprises }}
                            @else
                                Aucun entreprise
                            @endif
                        </div>
                        <div class="tab-pane p-3" id="tabParcours" role="tabpanel">
                            @if (isset($beneficiaire->parcours))
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
                                    @foreach($beneficiaire->parcours as $parcours)
                                        <tr>
                                            <td>{{ $parcours->projet->intitule }}</td>
                                            <td>{{ $parcours->conseiller->full_name }}</td>
                                            <td>{{ $parcours->prescripteur->full_name }}</td>
                                            <td class="text-center">
                                                <a class="btn btn-success" href="{{ route("beneficiaires.show", $beneficiaire) }}">Afficher</a>
                                                <a class="btn btn-primary" href="{{ route("beneficiaires.edit", $beneficiaire) }}">Modifier</a>
                                                <button class="btn btn-danger sa-warning" id="{{ $beneficiaire->id }}">Supprimer</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                Aucun parcours
                            @endif
                        </div>
                        <div class="tab-pane p-3" id="tabPrestation" role="tabpanel">
                            @if (isset($beneficiaire->entreprises))
                                {{ $beneficiaire->entreprises }}
                            @else
                                Aucune prestation
                            @endif
                        </div>
                        <div class="tab-pane p-3" id="tabRdv" role="tabpanel">
                            @if (isset($beneficiaire->entreprises))
                                {{ $beneficiaire->entreprises }}
                            @else
                                Aucun rendez-vous
                            @endif
                        </div>
                    </div>
--}}

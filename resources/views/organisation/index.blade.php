@extends('layouts.master')

@section('css')
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Organisation</h4>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="float-right d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-settings mr-2"></i> Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('organisations.create') }}">Ajouter une organisation</a>
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
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Téléphone</th>
                                <th>Ville</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($organisations as $organisation)
                            <tr>
                                <td>{{ $organisation->nom }}</td>
                                <td>{{ $organisation->type }}</td>
                                <td>{{ $organisation->tel }}</td>
                                <td>{{ $organisation->ville }}</td>
                                <td class="text-center">
                                    <a class="btn btn-success" href="{{ route("organisations.show", $organisation) }}">Afficher</a>
                                    <a class="btn btn-primary" href="{{ route("organisations.edit", $organisation) }}">Modifier</a>
                                    <button class="btn btn-danger sa-warning" id="{{ $organisation->id }}">Supprimer</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
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
            var url = '{{ url('/organisations/:organisation')}}';
            url = url.replace(':organisation', $(this).attr('id'));
            var row = $(this).closest("tr")

            Swal.fire({
                title: "Voulez vous supprimer cette organisation ?",
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
                            $('#datatable').DataTable().row(row).remove().draw();
                        },
                        error: function (data) {
                            console.log("fail" + data);
                        }
                    })
                    Swal.fire("Supprimé !", "L'organisation a été supprimé.", "success");
                }
            });
        });
    </script>
@endsection

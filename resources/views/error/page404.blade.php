@extends('layouts.master-without-nav')

@section('title')
    400
@endsection

@section('body')
    <body>
    @endsection

    @section('content')


        <div class="authentication-bg d-flex align-items-center pb-0 vh-100">
            <div class="content-center w-100">
                <div class="container">
                    <div class="card mo-mt-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-4 ml-auto">
                                    <div class="ex-page-content">
                                        <h1 class="text-dark display-1 mt-4">404!</h1>
                                        <h4 class="mb-4">Désolé, page non trouvée</h4>
                                        <p class="mb-5">Ce sera aussi simple que l'Occidental, en fait ce sera l'Occidental pour un Anglais</p>
                                        <a class="btn btn-primary mb-5 waves-effect waves-light" href="{{ route('home') }}"><i class="mdi mdi-home"></i> Retour au Tableau de Bord</a>
                                    </div>

                                </div>
                                <div class="col-lg-5 mx-auto">
                                    <img src="assets/images/error.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end container -->
            </div>

        </div>

@endsection

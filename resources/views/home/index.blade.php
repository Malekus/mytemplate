@extends('layouts.master')

@section('css')

@endsection

@section('content')
    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Tableau de bord</h4>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="float-right d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light"
                            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-settings mr-2"></i> Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-left mini-stat-img mr-4">
                            <img src="assets/images/services-icon/01.png" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Bénéficiaires</h5>
                        <h4 class="font-weight-medium font-size-24">{{ $beneficiaires->count() }} <i
                                class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                        <div class="mini-stat-label bg-success">
                            <p class="mb-0">+ 12%</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                        </div>

                        <p class="text-white-50 mb-0 mt-1">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-left mini-stat-img mr-4">
                            <img src="assets/images/services-icon/02.png" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Projets</h5>
                        <h4 class="font-weight-medium font-size-24">{{ $projets->count() }} <i
                                class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                        <div class="mini-stat-label bg-danger">
                            <p class="mb-0">- 28%</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                        </div>

                        <p class="text-white-50 mb-0 mt-1">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-left mini-stat-img mr-4">
                            <img src="assets/images/services-icon/03.png" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Prestations</h5>
                        <h4 class="font-weight-medium font-size-24">{{ $prestations->count() }} <i
                                class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                        <div class="mini-stat-label bg-info">
                            <p class="mb-0"> 00%</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                        </div>

                        <p class="text-white-50 mb-0 mt-1">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-left mini-stat-img mr-4">
                            <img src="assets/images/services-icon/04.png" alt="">
                        </div>
                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Rendez-vous</h5>
                        <h4 class="font-weight-medium font-size-24">{{ $rdvs }} <i
                                class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                        <div class="mini-stat-label bg-warning">
                            <p class="mb-0">+ 84%</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                        </div>

                        <p class="text-white-50 mb-0 mt-1">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('script')

@endsection

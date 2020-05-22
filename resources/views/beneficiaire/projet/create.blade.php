@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Ajouter un projet</h4>
            </div>
        </div>

    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    {!! Form::open(['method' => 'POST', 'url' => route('beneficiaires.store.projets'), 'class' => 'custom-validation', 'novalidate']) !!}

                    @include('beneficiaire.projet.form')

                    <div class="form-group mb-0">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                Ajouter
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect">
                                Annuler
                            </button>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')}}"></script>

    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
@endsection

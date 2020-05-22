@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Ajouter un référent</h4>
            </div>
        </div>

    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    {!! Form::open(['method' => 'POST', 'url' => route('referents.store'), 'class' => 'custom-validation']) !!}

                    @include('referent.form')

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

@endsection

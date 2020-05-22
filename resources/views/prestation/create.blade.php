@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Ajouter une prestation</h4>
            </div>
        </div>

    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'url' => route('prestations.store'), 'class' => 'custom-validation']) !!}

                    @include('prestation.form')

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
        </div>
    </div>
@endsection

@section('script')

@endsection

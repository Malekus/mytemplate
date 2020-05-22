@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Modifier un projet</h4>
            </div>
        </div>

    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($projet, ['method' => 'PUT', 'url' => route('projets.update', $projet->id), 'class' => 'custom-validation']) !!}

                    @include('projet.form', $projet)

                    <div class="form-group mb-0">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Modifier
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

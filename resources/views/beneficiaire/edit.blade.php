@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Modifier un bénéficiaire</h4>
            </div>
        </div>

    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($beneficiaire, ['method' => 'POST', 'url' => route('beneficiaires.store'), 'class' => 'custom-validation']) !!}

                    @include('beneficiaire.form', $beneficiaire)

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

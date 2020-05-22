@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Modifier un parcours</h4>
            </div>
        </div>

    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['method' => 'PUT', 'url' => route('parcours.update', $parcours), 'id' =>'form-horizontal', 'class' => 'form-horizontal form-wizard-wrapper']) !!}

                    <h3>Bénéficiaire</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="page-title-box">
                                    <h4 class="font-size-18">Modifier le bénéficiaire</h4>
                                </div>

                                <div class="form-group row">
                                    {!! Form::label('beneficiaire_id', 'Bénéficiaire', ['class' => 'col-lg-2 col-form-label']) !!}
                                    <div class="col-lg-6">
                                        {!! Form::select('beneficiaire_id', $beneficiaires, $parcours->beneficiaire->id,['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Projet</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="page-title-box">
                                    <h4 class="font-size-18">Modifier le projet ?</h4>
                                </div>

                                <div class="form-group row">
                                    {!! Form::label('projet_id', 'Projet', ['class' => 'col-lg-2 col-form-label']) !!}
                                    <div class="col-lg-6">
                                        {!! Form::select('projet_id', $projets, $parcours->projet->id,['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Prescripteur</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="page-title-box">
                                    <h4 class="font-size-18">Modifier le prescripteur ?</h4>
                                </div>

                                <div class="form-group row">
                                    {!! Form::label('prescripteur_id', 'Prescripteur', ['class' => 'col-lg-2 col-form-label']) !!}
                                    <div class="col-lg-6">
                                        {!! Form::select('prescripteur_id', $prescripteurs, $parcours->prescripteur->id,['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Conseiller</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="page-title-box">
                                    <h4 class="font-size-18">Modifier le conseiller ?</h4>
                                </div>

                                <div class="form-group row">
                                    {!! Form::label('conseiller_id', 'Conseiller', ['class' => 'col-lg-2 col-form-label']) !!}
                                    <div class="col-lg-6">
                                        {!! Form::select('conseiller_id', $conseillers, $parcours->conseiller->id,['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    {!! Form::close() !!}
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')
    <script src="{{ URL::asset('assets/libs/jquery-steps/jquery-steps.min.js')}}"></script>

    <script>
        $("#form-horizontal").steps({
            headerTag: "h3",
            bodyTag: "fieldset",
            transitionEffect: "slide",
            onFinished: function (event, currentIndex)
            {
                return $(this).submit();
            }
        });
    </script>
@endsection

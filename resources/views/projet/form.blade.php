{{--
<div data-repeater-list="inner-group" class="inner form-group">
    <div data-repeater-item class="inner mb-3 row">
        {!! Form::label('personne_id', 'Personne', ['class' => 'col-lg-2 col-form-label']) !!}
        <div class="col-sm-8">
            {!! Form::select('personne_id', $personnes, null,['class' => 'form-control', 'required', 'placeholder' => 'Choisissez une personne']) !!}
        </div>
        <div class="col-sm-1 col-4">
            <input data-repeater-create type="button" class="btn btn-success btn-block inner" value="+"/>
        </div>
        <div class="col-sm-1 col-4">
            <input data-repeater-delete type="button" class="btn btn-primary btn-block inner" value="-"/>
        </div>
    </div>
</div>
--}}

<div class="form-group row">
    {!! Form::label('intitule', 'Intitulé', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('intitule', null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('activite', 'Activité', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('activite', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('description', 'Description', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('date_debut', 'Date début', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::date('date_debut', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('date_fin', 'Date fin', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::date('date_fin', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('statut', 'Statut', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('statut', ['en cours' => 'En cours', 'complet' => 'Complet', 'abandon' => 'Abandon', 'suspendu' => 'Suspendu', 'annule' => 'Annulé'], null, ['class' => 'form-control']) !!}
    </div>
</div>


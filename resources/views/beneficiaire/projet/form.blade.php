{!! Form::hidden('beneficiaire_id', $beneficiaire, ['class' => 'form-control', 'required']) !!}

<div class="form-group row">
    {!! Form::label('conseiller_id', 'Conseiller', ['class' => 'col-lg-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('conseiller_id', $conseillers, null,['class' => 'form-control', 'required', 'placeholder' => 'Choisissez un conseiller']) !!}
    </div>
</div>

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
        {!! Form::select('statut', ['en cours' => 'En cours', 'complet' => 'Complet', 'abandon' => 'Abandon', 'suspendu' => 'Suspendu', 'annule' => 'Annulé'], 'M.', ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('nom', 'Nom', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('nom', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('prenom', 'Prénom', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('type', 'Type', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('type', ['Conseiller' => 'Conseiller', 'Référent' => 'Référent', 'Partenaire' => 'Partenaire', 'Prescripteur' => 'Prescripteur'], 'Conseiller', ['class' => 'form-control', 'placeholder' => 'Choisissez un type']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('civilite', 'Civilité', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('civilite', ['M.' => 'M.', 'Mme' => 'Mme', 'Mlle' => 'Mlle'], null, ['class' => 'form-control', 'placeholder' => 'Choisissez une civilité']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('tel', 'Téléphone', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('tel', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('adresse', 'Adresse', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('code_postal', 'Code Postal', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('code_postal', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('ville', 'Ville', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('ville', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('referent_id', 'Référent', ['class' => 'col-lg-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('referent_id', $referents, null,['class' => 'form-control', 'required', 'placeholder' => 'Choisissez un référent']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('nom', 'Nom', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('nom', null, ['class' => 'form-control']) !!}
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
    {!! Form::label('website', 'Site internet', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('website', null, ['class' => 'form-control']) !!}
    </div>
</div>

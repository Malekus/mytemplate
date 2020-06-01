@if(isset($prestation))
    {!! Form::hidden('prestation_id', $prestation, ['class' => 'form-control', 'required']) !!}
@endif

<div class="form-group row">
    {!! Form::label('conseiller_id', 'Conseiller', ['class' => 'col-lg-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('conseiller_id', $conseillers, null,['class' => 'form-control', 'required', 'placeholder' => 'Choisissez un conseiller']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('date_rdv', 'Date du rendez-vous', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::date('date_rdv', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="form-group row">
    <label for="heure_debut" class="col-sm-2 col-form-label">Heure de début</label>
    <div class="col-sm-10">
        <input class="form-control" type="time" value="12:00:00" required name="heure_debut" id="heure_debut">
    </div>
</div>

<div class="form-group row">
    <label for="heure_fin" class="col-sm-2 col-form-label">Heure de fin</label>
    <div class="col-sm-10">
        <input class="form-control" type="time" value="12:00:00" required name="heure_fin" id="heure_fin">
    </div>
</div>

<div class="form-group row">
    {!! Form::label('libelle', 'Libelle', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('libelle', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('status', 'Status', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('status',
        ["Présent" => "Présent", "Absent excusé" => "Absent excusé", "Pas de réponse" => "Pas de réponse"
        , "Absent non excusé" => "Absent non excusé"], null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group row">
    {!! Form::label('rang_rdv', 'Nombre de rendez-vous', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::number('rang_rdv', 1, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('rang_rdv_p', 'Nombre de rendez-vous présent', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::number('rang_rdv_p', 0, ['class' => 'form-control']) !!}
    </div>
</div>

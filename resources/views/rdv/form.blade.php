@if(isset($prestation))
    {!! Form::hidden('prestation_id', $prestation, ['class' => 'form-control', 'required']) !!}
@else
    {!! Form::hidden('prestation_id', $rdv->prestation->id, ['class' => 'form-control', 'required']) !!}
@endif

<div class="form-group row">
    {!! Form::label('conseiller_id', 'Conseiller', ['class' => 'col-lg-2 col-form-label']) !!}
    <div class="col-sm-10">
        @if(!isset($prestation))
            {!! Form::select('conseiller_id', $conseillers, $rdv->conseiller->id,['class' => 'form-control', 'required', 'placeholder' => 'Choisissez un conseiller']) !!}
        @else
            {!! Form::select('conseiller_id', $conseillers, null,['class' => 'form-control', 'required', 'placeholder' => 'Choisissez un conseiller']) !!}
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('date_rdv', 'Date du rendez-vous', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        @if(!isset($prestation))
            {!! Form::date('date_rdv', $rdv->date_rdv ? $rdv->date_rdv : \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
        @else
            {!! Form::date('date_rdv', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="heure_debut" class="col-sm-2 col-form-label">Heure de début</label>
    <div class="col-sm-10">
        @if(!isset($prestation))
            <input class="form-control" type="time" value="{{ $rdv->heure_debut ? $rdv->heure_debut : "12:00:00" }}" required name="heure_debut" id="heure_debut">
        @else
            <input class="form-control" type="time" value="12:00:00" required name="heure_debut" id="heure_debut">
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="heure_fin" class="col-sm-2 col-form-label">Heure de fin</label>
    <div class="col-sm-10">
        @if(!isset($prestation))
            <input class="form-control" type="time" value="{{ $rdv->heure_fin ? $rdv->heure_fin : "12:00:00"  }}" required name="heure_fin" id="heure_fin">
        @else
            <input class="form-control" type="time" value="12:00:00" required name="heure_fin" id="heure_fin">
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('libelle', 'Libelle', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('libelle', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('statut', 'Statut', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('statut', ["Présent" => "Présent", "Absent excusé" => "Absent excusé", "Pas de réponse" => "Pas de réponse", "Absent non excusé" => "Absent non excusé"], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('rang_rdv', 'Nombre de rendez-vous', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::number('rang_rdv', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('rang_rdv_p', 'Nombre de rendez-vous présent', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::number('rang_rdv_p', null, ['class' => 'form-control']) !!}
    </div>
</div>

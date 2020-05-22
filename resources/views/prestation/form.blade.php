{!! Form::hidden('parcours_id', $parcours, ['class' => 'form-control', 'required']) !!}

<div class="form-group row">
    {!! Form::label('dispositif', 'Dispositif', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('dispositif', ["APP93" => "APP93", "ASP771" => "ASP771", "ASP772" => "ASP772",
         "CD771" => "CD771", "CD772" => "CD772", "RSA771" => "RSA771", "RSA772" => "RSA772",
          "TNS771" => "TNS771", "TNS772" => "TNS772", "TNS781" => "TNS781", "TNS782" => "TNS782",
           "TNS921" => "TNS921", "TNS922" => "TNS922", "VPE781" => "VPE781", "VPE782" => "VPE782"], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('statut', 'Statut', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('statut', ["A convoquer" => "A convoquer", "Convocation 1" => "Convocation 1",
        "A reconvoquer" => "A reconvoquer", "Convocation 2" => "Convocation 2", "A relancer" =>
        "A relancer", "Suspendue" => "Suspendue", "Annulée" => "Annulée", "Abandon" => "Abandon",
        "En cours" => "En cours", "A cloturer" => "A cloturer", "AvantTerme" => "AvantTerme",
        "Complete" => "Complete", "Facturée" => "Facturée"], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('type_sortie', 'Type de sortie', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('type_sortie', ["NSJP" => "NSJP", "RDV non positionné" => "RDV non positionné",
        "Sans objet" => "Sans objet", "Abandon" => "Abandon", "RenouvelAccomp" => "RenouvelAccomp",
        "Reorientation" => "Reorientation", "Sortie positive" => "Sortie positive"], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('motif_sortie', 'Motif de sortie', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('motif_sortie', ["Maladie > 15 jours" => "Maladie > 15 jours",
        "Longue Maladie" => "Longue Maladie", "Conge Maternite" => "Conge Maternite", "Droit clos" => "Droit clos",
        "NonSoumisDrtsDvrs" => "NonSoumisDrtsDvrs", "DrtOuvrtVrstSusp" => "DrtOuvrtVrstSusp",
        "RadiationRsa" => "RadiationRsa", "NonRespectContrat" => "NonRespectContrat",
        "NonSignatureContrat" => "NonSignatureContrat", "Demenagement" => "Demenagement",
        "Injoignable" => "Injoignable", "Creation d'entreprise" => "Creation d'entreprise",
        "Recherche Formation" => "Recherche Formation", "Recherche Emploi" => "Recherche Emploi",
        "Formation" => "Formation", "Emploi" => "Emploi"], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('viabilite', 'Viabilité', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('viabilite', ["Activité viable" => "Activité viable", "Activité non viable" => "Activité non viable",
        "Non évaluée" => "Non évaluée"], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('delai_realisation', 'Délai de réalisation', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('delai_realisation', ["Moins de 3 mois" => "Moins de 3 mois",
        "Entre 3 et 6 mois" => "Entre 3 et 6 mois", "Entre 6 et 12 mois" => "Entre 6 et 12 mois",
        "Entre 12 et 18 mois" => "Entre 12 et 18 mois", "Entre 18 à 24 mois" => "Entre 18 à 24 mois"], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('orientation', 'Orientation', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('orientation', ["MDS" => "MDS", "APSIE ASP" => "APSIE ASP", "Pole Emploi" => "Pole Emploi",
        "APSIE TNS" => "APSIE TNS", "Accompagnement court" => "Accompagnement court",
        "Accompagnement long" => "Accompagnement long", "Inventerie" => "Inventerie",
        "Retour référent" => "Retour référent", "EPT" => "EPT", "Département" => "Département"], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('libelle', 'Libelle', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('libelle', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('date_debut', 'Date début', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::date('date_debut', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('date_fin', 'Date fin', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::date('date_fin', null, ['class' => 'form-control']) !!}
    </div>
</div>




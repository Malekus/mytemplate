<h3>Bénéficiaire</h3>
<fieldset>
    <div class="row">
        <div class="col-md-6">

            <div class="page-title-box">
                <h4 class="font-size-18">Déjà bénéficiaire</h4>
            </div>

            <div class="form-group row">
                {!! Form::label('beneficiaire_id_beneficiaire', 'Bénéficiaire', ['class' => 'col-lg-2 col-form-label']) !!}
                <div class="col-lg-6">
                    {!! Form::select('beneficiaire_id_beneficiaire', $beneficiaires, null,['class' => 'form-control', 'placeholder' => 'Choisissez un bénéficiaire']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <div class="page-title-box">
                <h4 class="font-size-18">Créer un bénéficiaire</h4>
            </div>

            <div class="form-group row">
                {!! Form::label('nom_beneficiaire', 'Nom', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('nom_beneficiaire', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('prenom_beneficiaire', 'Prénom', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('prenom_beneficiaire', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('civilite_beneficiaire', 'Civilité', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::select('civilite_beneficiaire', ['M.' => 'M.', 'Mme' => 'Mme', 'Mlle' => 'Mlle'], 'M.', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('tel_beneficiaire', 'Téléphone', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('tel_beneficiaire', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('email_beneficiaire', 'Email', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('email_beneficiaire', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('adresse_beneficiaire', 'Adresse', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('adresse_beneficiaire', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('code_postale_beneficiaire', 'Code Postale', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('code_postale_beneficiaire', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('ville_beneficiaire', 'Ville', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('ville_beneficiaire', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('region_beneficiaire', 'Région', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('region_beneficiaire', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('pays_beneficiaire', 'Pays', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('pays_beneficiaire', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('qpv_beneficiaire', 'QPV', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::select('qpv_beneficiaire', ['NSP' => 'NSP', 'Oui' => 'Oui', 'Non' => 'Non'], 'NSP', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('territoire_beneficiaire', 'Territoire', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('territoire_beneficiaire', null, ['class' => 'form-control']) !!}
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
                <h4 class="font-size-18">Déjà une projet ?</h4>
            </div>

            <div class="form-group row">
                {!! Form::label('projet_id_projet', 'Projet', ['class' => 'col-lg-2 col-form-label']) !!}
                <div class="col-lg-6">
                    {!! Form::select('projet_id_projet', $projets, null,['class' => 'form-control', 'placeholder' => 'Choisissez un projet']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <div class="page-title-box">
                <h4 class="font-size-18">Créer un projet</h4>
            </div>

            <div class="form-group row">
                {!! Form::label('conseiller_id_projet', 'Conseiller', ['class' => 'col-lg-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::select('conseiller_id_projet', $conseillers, null,['class' => 'form-control', 'required', 'placeholder' => 'Choisissez un conseiller']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('intitule_projet', 'Intitulé', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('intitule_projet', null, ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('activite_projet', 'Activité', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('activite_projet', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('description_projet', 'Description', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('description_projet', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('date_debut_projet', 'Date début', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::date('date_debut_projet', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('date_fin_projet', 'Date fin', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::date('date_fin_projet', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('statut_projet', 'Statut', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::select('statut_projet', ['en cours' => 'En cours', 'complet' => 'Complet', 'abandon' => 'Abandon', 'suspendu' => 'Suspendu', 'annule' => 'Annulé'], 'M.', ['class' => 'form-control']) !!}
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
                <h4 class="font-size-18">Déjà un prescripteur ?</h4>
            </div>

            <div class="form-group row">
                {!! Form::label('prescripteur_id_prescripteur', 'Prescripteur', ['class' => 'col-lg-2 col-form-label']) !!}
                <div class="col-lg-6">
                    {!! Form::select('prescripteur_id_prescripteur', $prescripteurs, null,['class' => 'form-control', 'placeholder' => 'Choisissez un prescripteur']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <div class="page-title-box">
                <h4 class="font-size-18">Créer un prescripteur</h4>
            </div>

            <div class="form-group row">
                {!! Form::label('referent_id_prescripteur', 'Référent', ['class' => 'col-lg-2 col-form-label']) !!}
                <div class="col-lg-6">
                    {!! Form::select('referent_id_prescripteur', $referents, null,['class' => 'form-control', 'placeholder' => 'Choisissez un référent']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('nom_prescripteur', 'Nom', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('nom_prescripteur', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('adresse_prescripteur', 'Adresse', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('adresse_prescripteur', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('code_postal_prescripteur', 'Code Postal', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('code_postal_prescripteur', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('ville_prescripteur', 'Ville', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('ville_prescripteur', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('tel_prescripteur', 'Téléphone', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('tel_prescripteur', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('email_prescripteur', 'Email', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('email_prescripteur', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('website_prescripteur', 'Site internet', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('website_prescripteur', null, ['class' => 'form-control']) !!}
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
                <h4 class="font-size-18">Déjà un conseiller ?</h4>
            </div>

            <div class="form-group row">
                {!! Form::label('conseiller_id_conseiller', 'Conseiller', ['class' => 'col-lg-2 col-form-label']) !!}
                <div class="col-lg-6">
                    {!! Form::select('conseiller_id_conseiller', $conseillers, null,['class' => 'form-control', 'placeholder' => 'Choisissez un conseiller']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <div class="page-title-box">
                <h4 class="font-size-18">Créer un conseiller</h4>
            </div>

            <div class="form-group row">
                {!! Form::label('nom_conseiller', 'Nom', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('nom_conseiller', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('prenom_conseiller', 'Prénom', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('prenom_conseiller', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
</fieldset>

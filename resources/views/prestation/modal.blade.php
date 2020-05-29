<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title mt-0" id="myLargeModalLabel">Gérer la prestation n°{{ $prestation->id }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitµae suscipit unde vero voluptatem!</p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Date du rendez-vous</th>
                    <th>Heure Début</th>
                    <th>Heure Fin</th>
                    <th>Conseiller</th>
                    <th>Libellé</th>
                    <th>Statut</th>
                    <th>Motif absence</th>
                    <th>Rang</th>
                    <th>RangR</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($prestation->rendezvous as $rdv)
                    <tr>
                        <td>{{ $rdv->dateRdv }}</td>
                        <td>{{ $rdv->heure_debut }}</td>
                        <td>{{ $rdv->heure_fin }}</td>
                        <td>{{ $rdv->conseiller->full_name }}</td>
                        <td>{{ $rdv->libelle }}</td>
                        <td>{{ $rdv->status }}</td>
                        <td>{{ $rdv->motif_abs }}</td>
                        <td>{{ $rdv->rang_Rdv }}</td>
                        <td>{{ $rdv->rang_RdvP }}</td>
                        <td>
                            <button type="button" class="btn btn-primary">Modifier</button>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        <p class="mb-0">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, atque dicta distinctio dolore ea et fugiat incidunt ipsa laboriosam maiores nemo nesciunt officiis praesentium quae quidem unde voluptate! Et, natus.
        </p>
    </div>
</div>

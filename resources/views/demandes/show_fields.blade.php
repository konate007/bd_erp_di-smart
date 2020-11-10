<!-- Objet Field -->
<div class="form-group">
    {!! Form::label('objet', 'Objet:') !!}
    <p>{{ $demande->objet  }}</p>
</div>

<!-- Departement Id Field -->
<div class="form-group">
    {!! Form::label('departement_id', 'Departement:') !!}
    <p>{{$departements->find($demande->departement_id)->nom_departement}}</p>
</div>

<!-- Projet Id Field -->
<div class="form-group">
    {!! Form::label('projet_id', 'Projet:') !!}
    <p>{{ $projets->find($demande->projet_id)->nom_projet }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $demande->message }}</p>
</div>

<!-- Niveau Importance Id Field -->
<div class="form-group">
    {!! Form::label('niveau_importance_id', 'Niveau Importance:') !!}
    <p>{{$niveau_importances->find($demande->niveau_importance_id)->niveau }}</p>
</div>

<!-- Type Demande Id Field -->
<div class="form-group">
    {!! Form::label('type_demande_id', 'Type Demande:') !!}
    <p>{{$type_demandes->find($demande->type_demande_id)->type }}</p>
</div>

<!-- Statut Field -->
<div class="form-group">
    {!! Form::label('statut', 'Statut:') !!}
    <p>{{$demande->statut}}</p>
</div>

<!-- Date fermeture Field -->
<div class="form-group">
    {!! Form::label('date_fermeture', 'Date fermeture:') !!}
    <p>{{ $demande->date_fermeture }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $demande->created_at }}</p>
</div>

<!-- Updated At Field -->   
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $demande->updated_at }}</p>
</div>


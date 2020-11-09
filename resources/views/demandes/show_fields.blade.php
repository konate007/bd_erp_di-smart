<!-- Objet Field -->
<div class="form-group">
    {!! Form::label('objet', 'Objet:') !!}
    <p>{{ $demande->objet  }}</p>
</div>

<!-- Departement Id Field -->
<div class="form-group">
    {!! Form::label('departement_id', 'Departement Id:') !!}
    <p>{{$departements->find($demande->departement_id)->nom_departement}}</p>
</div>

<!-- Projet Id Field -->
<div class="form-group">
    {!! Form::label('projet_id', 'Projet Id:') !!}
    <p>{{ $projets->find($demande->projet_id)->nom_projet }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $demande->message }}</p>
</div>

<!-- Niveau Importance Id Field -->
<div class="form-group">
    {!! Form::label('niveau_importance_id', 'Niveau Importance Id:') !!}
    <p>{{$niveau_importances->find($demande->niveau_importance_id)->niveau }}</p>
</div>

<!-- Type Demande Id Field -->
<div class="form-group">
    {!! Form::label('type_demande_id', 'Type Demande Id:') !!}
    <p>{{$type_demandes->find($demande->type_demande_id)->type }}</p>
</div>

<!-- Statut Field -->
<div class="form-group">
    {!! Form::label('statut', 'Statut:') !!}
    @if ($demande->statut == 0)
        <p>OPEN</p>
    @endif
    @if ($demande->statut ==1)
        <p>INPRO</p>
    @elseif ($demande->statut == 2)
        <p>CLOSE</p>
    @else
        <p>STAND</p>
    @endif
    
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


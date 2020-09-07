<!-- Objet Field -->
<div class="form-group">
    {!! Form::label('objet', 'Objet:') !!}
    <p>{{ $demande->objet }}</p>
</div>

<!-- Departement Id Field -->
<div class="form-group">
    {!! Form::label('departement_id', 'Departement Id:') !!}
    <p>{{ $demande->departement_id }}</p>
</div>

<!-- Projet User Id Field -->
<div class="form-group">
    {!! Form::label('projet_user_id', 'Projet User Id:') !!}
    <p>{{ $demande->projet_user_id }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $demande->message }}</p>
</div>

<!-- Niveau Importance Id Field -->
<div class="form-group">
    {!! Form::label('niveau_importance_id', 'Niveau Importance Id:') !!}
    <p>{{ $demande->niveau_importance_id }}</p>
</div>

<!-- Type Demande Id Field -->
<div class="form-group">
    {!! Form::label('type_demande_id', 'Type Demande Id:') !!}
    <p>{{ $demande->type_demande_id }}</p>
</div>

<!-- Statut Field -->
<div class="form-group">
    {!! Form::label('statut', 'Statut:') !!}
    <p>{{ $demande->statut }}</p>
</div>

<!-- Responsable Field -->
<div class="form-group">
    {!! Form::label('responsable', 'Responsable:') !!}
    <p>{{ $demande->responsable }}</p>
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


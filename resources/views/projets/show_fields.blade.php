<!-- Nom Projet Field -->
<div class="form-group">
    {!! Form::label('nom_projet', 'Nom Projet:') !!}
    <p>{{ $projet->nom_projet }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $projet->description }}</p>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $projet->client_id }}</p>
</div>

<!-- Date Lancement Field -->
<div class="form-group">
    {!! Form::label('date_lancement', 'Date Lancement:') !!}
    <p>{{ $projet->date_lancement }}</p>
</div>

<!-- Date Livraison Field -->
<div class="form-group">
    {!! Form::label('date_livraison', 'Date Livraison:') !!}
    <p>{{ $projet->date_livraison }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $projet->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $projet->updated_at }}</p>
</div>


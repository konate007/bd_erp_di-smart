<!-- Nom Departement Field -->
<div class="form-group">
    {!! Form::label('nom_departement', 'Nom Departement:') !!}
    <p>{{ $departement->nom_departement }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $departement->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $departement->updated_at }}</p>
</div>


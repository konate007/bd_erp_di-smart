<!-- Nom Role Field -->
<div class="form-group">
    {!! Form::label('nom_role', 'Nom Role:') !!}
    <p>{{ $role->nom_role }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $role->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $role->updated_at }}</p>
</div>


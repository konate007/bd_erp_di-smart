<!-- Nom Service Field -->
<div class="form-group">
    {!! Form::label('nom_service', 'Nom Service:') !!}
    <p>{{ $service->nom_service }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $service->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $service->updated_at }}</p>
</div>


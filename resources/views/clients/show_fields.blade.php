<!-- Nom Client Field -->
<div class="form-group">
    {!! Form::label('nom_client', 'Nom Client:') !!}
    <p>{{ $client->nom_client }}</p>
</div>

<!-- Adresse Field -->
<div class="form-group">
    {!! Form::label('adresse', 'Adresse:') !!}
    <p>{{ $client->adresse }}</p>
</div>

<!-- Telephone1 Field -->
<div class="form-group">
    {!! Form::label('telephone1', 'Telephone1:') !!}
    <p>{{ $client->telephone1 }}</p>
</div>

<!-- Telephone2 Field -->
<div class="form-group">
    {!! Form::label('telephone2', 'Telephone2:') !!}
    <p>{{ $client->telephone2 }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $client->email }}</p>
</div>

<!-- Site Web Field -->
<div class="form-group">
    {!! Form::label('site_web', 'Site Web:') !!}
    <p>{{ $client->site_web }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User:') !!}
    <p>{{ $users->find($client->user_id)->nom }}</p>
</div>

<!-- Notes Field -->
<div class="form-group">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $client->notes }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $client->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $client->updated_at }}</p>
</div>


<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $projetUser->user_id }}</p>
</div>

<!-- Projet Id Field -->
<div class="form-group">
    {!! Form::label('projet_id', 'Projet Id:') !!}
    <p>{{ $projetUser->projet_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $projetUser->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">

    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $projetUser->updated_at }}</p>
</div>


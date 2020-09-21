<!-- Nom Client Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_client', 'Nom Client:') !!}
    {!! Form::text('nom_client', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('adresse', 'Adresse:') !!}
    {!! Form::textarea('adresse', null, ['class' => 'form-control']) !!}
</div>

<!-- Telephone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone1', 'Telephone1:') !!}
    {!! Form::number('telephone1', null, ['class' => 'form-control']) !!}
</div>

<!-- Telephone2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone2', 'Telephone2:') !!}
    {!! Form::number('telephone2', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Site Web Field -->
<div class="form-group col-sm-6">
    {!! Form::label('site_web', 'Site Web:') !!}
    {!! Form::text('site_web', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::text('notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clients.index') }}" class="btn btn-default">Annuler</a>
</div>

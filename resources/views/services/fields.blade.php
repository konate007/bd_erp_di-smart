<!-- Nom Service Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_service', 'Nom Service:') !!}
    {!! Form::text('nom_service', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('services.index') }}" class="btn btn-default">Annuler</a>
</div>

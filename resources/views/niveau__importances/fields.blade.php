<!-- Niveau Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveau', 'Niveau:') !!}
    {!! Form::text('niveau', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('niveauImportances.index') }}" class="btn btn-default">Annuler</a>
</div>

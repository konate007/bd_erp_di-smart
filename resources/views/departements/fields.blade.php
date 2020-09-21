<!-- Nom Departement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_departement', 'Nom Departement:') !!}
    {!! Form::text('nom_departement', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('departements.index') }}" class="btn btn-default">Annuler</a>
</div>

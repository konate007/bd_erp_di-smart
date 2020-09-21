<!-- Nom Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_role', 'Nom Role:') !!}
    {!! Form::text('nom_role', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">Annuler</a>
</div>

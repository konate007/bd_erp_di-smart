<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id',$userItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
</div>

<!-- Projet Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projet_id', 'Projet Id:') !!}
    {!! Form::select('projet_id',$projetItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projetUsers.index') }}" class="btn btn-default">Annuler</a>
</div>

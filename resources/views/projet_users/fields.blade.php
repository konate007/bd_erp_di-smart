<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id',$valuesUserID, ['class' => 'form-control']) !!}
</div>

<!-- Projet Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projet_id', 'Projet Id:') !!}
    {!! Form::select('projet_id',$valuesProjetID, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projetUsers.index') }}" class="btn btn-default">Cancel</a>
</div>

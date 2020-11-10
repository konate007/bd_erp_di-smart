<!-- Projet Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projet_id', 'Projet:') !!}
    {!! Form::select('projet_id',$projetItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
</div>

<!-- Planmaintenance Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('planmaintenance_id', 'Planmaintenance:') !!}
    {!! Form::select('planmaintenance_id', $planmaintenanceItems, null, ['class' => 'form-control','placeholder'=> 'Please select']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Debut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_debut', 'Date Debut:') !!}
    {!! Form::date('date_debut', null, ['class' => 'form-control','id'=>'date_debut']) !!}
</div>

<!-- Date Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_fin', 'Date Fin:') !!}
    {!! Form::date('date_fin', null, ['class' => 'form-control','id'=>'date_fin']) !!}
</div>


<!-- Statut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statut', 'Statut:') !!}
    {!! Form::select('statut',['En cours', 'Expiré','Suspendu'], null, ['class' => 'form-control','placeholder'=> 'Please select']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contrats.index') }}" class="btn btn-default">Annuler</a>
</div>

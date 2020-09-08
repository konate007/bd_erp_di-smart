<!-- Objet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('objet', 'Objet:') !!}
    {!! Form::text('objet', null, ['class' => 'form-control']) !!}
</div>

<!-- Departement Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departement_id', 'Departement Id:') !!}
    {!! Form::select('departement_id',$departementItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
</div>

<!-- Projet User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projet_user_id', 'Projet User Id:') !!}
    {!! Form::select('projet_user_id',$projet_userItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
</div>

<!-- Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::text('message', null, ['class' => 'form-control']) !!}
</div>

<!-- Niveau Importance Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveau_importance_id', 'Niveau Importance Id:') !!}
    {!! Form::select('niveau_importance_id', $niveau_importanceItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
</div>

<!-- Type Demande Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_demande_id', 'Type Demande Id:') !!}
    {!! Form::select('type_demande_id',$type_demandeItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
</div>

<!-- Statut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statut', 'Statut:') !!}
    {!! Form::text('statut', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsable', 'Responsable:') !!}
    {!! Form::select('responsable', $responsableItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('demandes.index') }}" class="btn btn-default">Cancel</a>
</div>
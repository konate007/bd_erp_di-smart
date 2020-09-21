<!-- Projet User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projet_user_id', 'Projet User Id:') !!}
    {!! Form::select('projet_user_id', $projetItems, null, ['class' => 'form-control', 'placeholder'=> 'Please select']) !!}
</div>

<!-- Planmaintenance Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('planmaintenance_id', 'Planmaintenance Id:') !!}
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
    {!! Form::text('date_debut', null, ['class' => 'form-control','id'=>'date_debut']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        $('#date_debut').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Date Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_fin', 'Date Fin:') !!}
    {!! Form::text('date_fin', null, ['class' => 'form-control','id'=>'date_fin']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_fin').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Statut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statut', 'Statut:') !!}
    {!! Form::select('statut',['ENCOU', 'EXPIR','SUSPE'], null, ['class' => 'form-control','placeholder'=> 'Please select']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contrats.index') }}" class="btn btn-default">Annuler</a>
</div>

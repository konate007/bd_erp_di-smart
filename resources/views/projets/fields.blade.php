<!-- Nom Projet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_projet', 'Nom Projet:') !!}
    {!! Form::text('nom_projet', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client Id:') !!}
    {!! Form::select('client_id', $clientItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Date Lancement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_lancement', 'Date Lancement:') !!}
    {!! Form::text('date_lancement', null, ['class' => 'form-control','id'=>'date_lancement']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_lancement').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Date Livraison Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_livraison', 'Date Livraison:') !!}
    {!! Form::text('date_livraison', null, ['class' => 'form-control','id'=>'date_livraison']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_livraison').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projets.index') }}" class="btn btn-default">Cancel</a>
</div>

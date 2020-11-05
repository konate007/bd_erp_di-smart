<!-- Projet User Id Field -->
<div class="form-group">
    {!! Form::label('projet_user_id', 'Projet User Id:') !!}
    <p>{{ $projets->find($contrat->projet_user_id)->nom_projet }}</p>
</div>

<!-- Planmaintenance Id Field -->
<div class="form-group">
    {!! Form::label('planmaintenance_id', 'Planmaintenance Id:') !!}
    <p>{{ $planmaintenances->find($contrat->planmaintenance_id)->titre }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $contrat->description }}</p>
</div>

<!-- Date Debut Field -->
<div class="form-group">
    {!! Form::label('date_debut', 'Date Debut:') !!}
    <p>{{ $contrat->date_debut }}</p>
</div>

<!-- Date Fin Field -->
<div class="form-group">
    {!! Form::label('date_fin', 'Date Fin:') !!}
    <p>{{ $contrat->date_fin }}</p>
</div>

<!-- Statut Field -->
<div class="form-group">
    {!! Form::label('statut', 'Statut:') !!}
    @if ($contrat->statut == 0)
        <p>ENCOU</p>
    @elseif ($contrat->statut == 1)
        <p>EXPIR</p>
    @else
        <p>SUSPE</p>
    @endif
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $contrat->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $contrat->updated_at }}</p>
</div>


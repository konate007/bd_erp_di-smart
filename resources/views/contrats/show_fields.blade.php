<!-- Projet Id Field -->
<div class="form-group">
    {!! Form::label('projet_id', 'Projet:') !!}
    <p>{{ $projets->find($contrat->projet_id)->nom_projet }}</p>
</div>

<!-- Planmaintenance Id Field -->
<div class="form-group">
    {!! Form::label('planmaintenance_id', 'Planmaintenance:') !!}
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
        <p>En cours</p>
    @elseif ($contrat->statut == 1)
        <p>Expiré</p>
    @else
        <p>Suspendu</p>
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


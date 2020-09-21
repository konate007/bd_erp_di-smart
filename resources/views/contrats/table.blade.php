<div class="table-responsive">
    <table class="table" id="contrats-table">
        <thead>
            <tr>
                <th>Projet User Id</th>
        <th>Planmaintenance Id</th>
        <th>Description</th>
        <th>Date Debut</th>
        <th>Date Fin</th>
        <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contrats as $contrat)
            <tr>
                @foreach($projets as $projet)
                        @if($contrat->projet_user_id == $projet->id)
                            <td>{{ $projet->nom_projet }}</td>
                        @endif
                @endforeach
                @foreach($planmaintenances as $planmaintenance)
                    @if($contrat->planmaintenance_id == $planmaintenance->id)
                        <td>{{ $planmaintenance->titre }}</td>
                    @endif
                @endforeach
                <td>{{ $contrat->description }}</td>
                <td>{{ $contrat->date_debut->toDateString() }}</td>
                <td>{{ $contrat->date_fin->toDateString() }}</td>
                @if ($contrat->statut == 0)
                     <td>ENCOU</td>
                @elseif ($contrat->statut == 1)
                     <td>EXPIR</td>
                @else
                     <td>SUSPE</td>
                @endif
                <td>
                    {!! Form::open(['route' => ['contrats.destroy', $contrat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contrats.show', [$contrat->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contrats.edit', [$contrat->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sûr?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="demandes-table">
        <thead>
            <tr>
                <th>Departement</th>
                <th>Projet </th>
                <th>Message</th>
                <th>Niveau Importance</th>
                <th>Type Demande</th>
                <th>Statut</th>
                <th>Date fermeture</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($demandes as $demande)
            <tr>
                @foreach($departements as $departement)
                    @if($demande->departement_id == $departement->id)
                    <td>{{ $departement->nom_departement }}</td>
                    @endif
                @endforeach
                
                <td>{{ $projets->find($demande->projet_id)->nom_projet }}</td>

                <td>{{ $demande->message }}</td>
                @foreach($niveau_importances as $niveau_importance)
                    @if($demande->niveau_importance_id == $niveau_importance->id)
                        <td>{{ $niveau_importance->niveau }}</td>
                    @endif
                @endforeach
                @foreach($type_demandes as $type_demande)
                    @if($demande->type_demande_id == $type_demande->id)
                       <td>{{ $type_demande->type }}</td>
                    @endif
                @endforeach
                <td>{{$demande->statut}}</td>
                <td>{{ $demande->date_fermeture->toDateString() }}</td>
                <td>
                    {!! Form::open(['route' => ['demandes.destroy', $demande->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('demandes.show', [$demande->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('demandes.edit', [$demande->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sûr?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

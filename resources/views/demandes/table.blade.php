<div class="table-responsive">
    <table class="table" id="demandes-table">
        <thead>
            <tr>
                <th>Objet</th>
        <th>Departement Id</th>
        <th>Projet User Id</th>
        <th>Message</th>
        <th>Niveau Importance Id</th>
        <th>Type Demande Id</th>
        <th>Statut</th>
        <th>Responsable</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($demandes as $demande)
            <tr>
                <td>{{ $demande->objet }}</td>
            <td>{{ $demande->departement_id }}</td>
            <td>{{ $demande->projet_user_id }}</td>
            <td>{{ $demande->message }}</td>
            <td>{{ $demande->niveau_importance_id }}</td>
            <td>{{ $demande->type_demande_id }}</td>
            <td>{{ $demande->statut }}</td>
            <td>{{ $demande->responsable }}</td>
                <td>
                    {!! Form::open(['route' => ['demandes.destroy', $demande->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('demandes.show', [$demande->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('demandes.edit', [$demande->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

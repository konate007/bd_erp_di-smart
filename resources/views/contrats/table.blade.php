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
                <td>{{ $contrat->projet_user_id }}</td>
            <td>{{ $contrat->planmaintenance_id }}</td>
            <td>{{ $contrat->description }}</td>
            <td>{{ $contrat->date_debut }}</td>
            <td>{{ $contrat->date_fin }}</td>
            <td>{{ $contrat->statut }}</td>
                <td>
                    {!! Form::open(['route' => ['contrats.destroy', $contrat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contrats.show', [$contrat->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contrats.edit', [$contrat->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

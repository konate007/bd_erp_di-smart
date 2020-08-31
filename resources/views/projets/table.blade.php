<div class="table-responsive">
    <table class="table" id="projets-table">
        <thead>
            <tr>
                <th>Nom Projet</th>
        <th>Description</th>
        <th>Client Id</th>
        <th>Date Lancement</th>
        <th>Date Livraison</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projets as $projet)
            <tr>
                <td>{{ $projet->nom_projet }}</td>
            <td>{{ $projet->description }}</td>
            <td>{{ $projet->client_id }}</td>
            <td>{{ $projet->date_lancement }}</td>
            <td>{{ $projet->date_livraison }}</td>
                <td>
                    {!! Form::open(['route' => ['projets.destroy', $projet->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projets.show', [$projet->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('projets.edit', [$projet->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

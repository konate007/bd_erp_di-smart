<div class="table-responsive">
    <table class="table" id="departements-table">
        <thead>
            <tr>
                <th>Nom Departement</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($departements as $departement)
            <tr>
                <td>{{ $departement->nom_departement }}</td>
                <td>
                    {!! Form::open(['route' => ['departements.destroy', $departement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departements.show', [$departement->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('departements.edit', [$departement->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sûr?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

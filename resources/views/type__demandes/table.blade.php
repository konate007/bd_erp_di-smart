<div class="table-responsive">
    <table class="table" id="typeDemandes-table">
        <thead>
            <tr>
                <th>Type</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($typeDemandes as $typeDemande)
            <tr>
                <td>{{ $typeDemande->type }}</td>
                <td>
                    {!! Form::open(['route' => ['typeDemandes.destroy', $typeDemande->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('typeDemandes.show', [$typeDemande->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('typeDemandes.edit', [$typeDemande->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sûr?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

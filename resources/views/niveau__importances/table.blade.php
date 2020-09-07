<div class="table-responsive">
    <table class="table" id="niveauImportances-table">
        <thead>
            <tr>
                <th>Niveau</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($niveauImportances as $niveauImportance)
            <tr>
                <td>{{ $niveauImportance->niveau }}</td>
                <td>
                    {!! Form::open(['route' => ['niveauImportances.destroy', $niveauImportance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('niveauImportances.show', [$niveauImportance->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('niveauImportances.edit', [$niveauImportance->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

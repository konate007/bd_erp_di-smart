<div class="table-responsive">
    <table class="table" id="projetUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Projet Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projetUsers as $projetUser)
            <tr>
                <td>{{ $projetUser->user_id }}</td>
            <td>{{ $projetUser->projet_id }}</td>
                <td>
                    {!! Form::open(['route' => ['projetUsers.destroy', $projetUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projetUsers.show', [$projetUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('projetUsers.edit', [$projetUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

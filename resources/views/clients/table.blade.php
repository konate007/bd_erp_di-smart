<div class="table-responsive">
    <table class="table" id="clients-table">
        <thead>
            <tr>
                <th>Nom Client</th>
        <th>Adresse</th>
        <th>Telephone1</th>
        <th>Telephone2</th>
        <th>Email</th>
        <th>Site Web</th>
        <th>User</th>
        <th>Notes</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->nom_client }}</td>
            <td>{{ $client->adresse }}</td>
            <td>{{ $client->telephone1 }}</td>
            <td>{{ $client->telephone2 }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->site_web }}</td>
            @foreach($users as $user)
                    @if($user->id == $client->user_id)
                    <td>{{ $user->nom }}</td>
                    @endif
            @endforeach
            <td>{{ $client->notes }}</td>
                <td>
                    {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clients.show', [$client->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('clients.edit', [$client->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sûr ?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

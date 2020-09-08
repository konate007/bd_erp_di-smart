<div class="table-responsive">
    <table class="table" id="planmaintenances-table">
        <thead>
            <tr>
                <th>Titre</th>
        <th>Service Id</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($planmaintenances as $planmaintenance)
            <tr>
                <td>{{ $planmaintenance->titre }}</td>
            <td>{{ $planmaintenance->service_id }}</td>
            <td>{{ $planmaintenance->description }}</td>
                <td>
                    {!! Form::open(['route' => ['planmaintenances.destroy', $planmaintenance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('planmaintenances.show', [$planmaintenance->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('planmaintenances.edit', [$planmaintenance->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
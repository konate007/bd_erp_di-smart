@extends('espaceclients.navbar')

@section('contenu')
    <div class="table-responsive">
        <table class="table" id="projets-table">
            <thead class="thead-dark">
            <tr>
                <th>Nom Projet</th>
                <th>Description</th>
                <th>Client Id</th>
                <th>Date Lancement</th>
                <th>Date Livraison</th>
                <th>Service Id</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projets as $projet)
                <tr>
                    <td>{{ $projet->nom_projet }}</td>
                    <td>{{ $projet->description }}</td>
                    <td>{{ $clients->find($projet->client_id)->nom_client }}</td>
                    <td>{{ $projet->date_lancement }}</td>
                    <td>{{ $projet->date_livraison }}</td>
                    @foreach($services as $service)
                        @if($projet->service_id == $service->id)
                            <td>{{ $service->nom_service }}</td>
                        @endif
                    @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

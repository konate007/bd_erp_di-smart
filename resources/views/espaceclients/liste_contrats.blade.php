@extends('espaceclients.navbar')

@section('contenu')
    <div class="table-responsive">
        <table class="table" id="projets-table">
            <thead class="thead-dark">
            <tr>
                <th>Projet</th>
                <th>Plans de maintenance</th>
                <th>Description</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Statut</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($contrats as $contrat)
                <tr>
                    <td>{{ $projets->find($contrat->projet_id)->nom_projet }}</td>
                    <td>{{ $planmaintenances->find($contrat->planmaintenance_id )->titre }}</td>
                    <td>{{ $contrat->description }}</td>
                    <td>{{ $contrat->date_debut }}</td>
                    <td>{{ $contrat->date_fin }}</td>
                    <td>{{ $contrat->statut }}</td>
                    <td><a class="btn btn-warning" href="{{ url('/download/'.$contrat->id) }}">Télécharger PDF</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

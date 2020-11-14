@extends('espaceclients.navbar')

@section('contenu')
    <div class="table-responsive">
        <table class="table" id="projets-table">
            <thead class="thead-dark">
            <tr>
                <th>Nom Projet</th>
                <th>Description</th>
                <th>Date Lancement</th>
                <th>Date Livraison</th>
                <!--<th>Action</th>-->

            </tr>
            </thead>
            <tbody>
            @foreach($projets as $projet)
                <tr>
                    <td>{{ $projet->nom_projet }}</td>
                    <td>{{ $projet->description }}</td>
                    <td>{{ $projet->date_lancement }}</td>
                    <td>{{ $projet->date_livraison }}</td>
                    <!--<td><a class="btn btn-warning" href="{{ url('/download/'.$projet->id) }}">Download PDF</a></td>-->
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

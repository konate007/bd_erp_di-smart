@extends('layouts.app')
@section('content')
<div class="container">
    @if(isset($details))
    <h2>Résultat(s) de la recherche pour <b> {{$query}} </b> </h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Objet</th>
                <th>Departement </th>
                <th>Projet</th>
                <th>Message</th>
                <th>Niveau Importance </th>
                <th>Type Demande </th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $demande)
            <tr>
                <td>{{$demande->objet}}</td>
                @foreach($departements as $departement)
                    @if($demande->departement_id == $departement->id)
                         <td>{{ $departement->nom_departement }}</td>
                    @endif
                @endforeach
                @foreach($projets as $projet)
                    @if($demande->projet_id == $projet->id)
                         <td>{{ $projet->nom_projet }}</td>
                    @endif
                @endforeach
                <td>{{$demande->message}}</td>
                @foreach($niveau_importances as $niveau_importance)
                    @if($demande->niveau_importance_id == $niveau_importance->id)
                         <td>{{ $niveau_importance->niveau }}</td>
                    @endif
                @endforeach
                @foreach($type_demandes as $type_demande)
                    @if($demande->type_demande_id == $type_demande->id)
                         <td>{{ $type_demande->type }}</td>
                    @endif
                @endforeach
                <td>{{$demande->statut}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <h2 style="text-align:center">Aucun(s) résultat(s) trouvés pour la recherche <b> {{ $query }} </b>. Essayer de rechercher encore !</h2>
    @endif
</div>
@endsection

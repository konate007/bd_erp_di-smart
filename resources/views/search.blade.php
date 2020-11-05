@extends('layouts.app')
@section('content')
<div class="container">
    @if(isset($details))
    <h2>Résultat(s) de la recherche pour <b> {{$query}} </b> </h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Objet</th>
                <th>Departement id</th>
                <th>Projet User id</th>
                <th>Message</th>
                <th>Niveau Importance id</th>
                <th>Type Demande id</th>
                <th>Statut</th>
                <th>Responsale</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $demande)
            <tr>
                <td>{{$demande->objet}}</td>
                <td>{{$departements->find($demande->departement_id)->nom_departement}}</td>
                <td>{{$projets->find($demande->projet_user_id)->nom_projet}}</td>
                <td>{{$demande->message}}</td>
                <td>{{$niveau_importances->find($demande->niveau_importance_id)->niveau}}</td>
                <td>{{$type_demandes->find($demande->type_demande_id)->type}}</td>
                <td>{{$demande->statut}}</td>
                <td>{{$users->find($demande->responsable)->nom}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <h2 style="text-align:center">Aucun(s) résultat(s) trouvés pour la recherche <b> {{ $query }} </b>. Essayer de rechercher encore !</h2>
    @endif
</div>
@endsection

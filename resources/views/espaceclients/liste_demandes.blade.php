@extends('espaceclients.navbar')

@section('contenu')
    <div class="table-responsive">
        @if(count($demandes) > 0)
            <table class="table" id="demandes-table">
                <thead class="thead-dark">
                <tr>
                    <th>Objet</th>
                    <th>Departement</th>
                    <th>Projet</th>
                    <th>Message</th>
                    <th>Niveau Importance</th>
                    <th>Type Demande</th>
                    <th>Statut</th>
                    <th>Date fermeture</th>
                </tr>
                </thead>
                <tbody>
                @foreach($demandes as $demande)
                    <tr>
                        <td>{{ $demande ->objet }}</td>

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

                        <td>{{ $demande->message }}</td>

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

                        @if ($demande->statut == 0)
                            <td>ENCOU</td>
                        @elseif ($demande->statut == 1)
                            <td>EXPIR</td>
                        @else
                            <td>SUSPE</td>
                        @endif

                        <td>{{ $demande->date_fermeture->toDateString() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            @section('contenu')
            <main class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Dashboard') }}</div>
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <p>Aucune demande pour l'utilisateur : <b>{{ Auth::user()->nom }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
           @endsection
        @endif
    </div>
@endsection

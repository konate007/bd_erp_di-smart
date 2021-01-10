@extends('espaceclients.navbar')

@section('contenu')
    <div class="container" style="margin-top:25px">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Vos données personnelles</h5>
                <table class="table">
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>Votre Nom</td>
                            <td>{{ $user->nom }}</td>
                        </tr>
                        <tr>
                            <td>Votre Prenom</td>
                            <td>{{ $user->prenom }}</td>
                        </tr>
                        <tr>
                            <td>Votre Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Votre fonction</td>
                            <td>{{ $user->fonction }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                <div class="col-sm-5">
                
                </div>
                <div class="col-sm-4">
                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        <a href="{{ route('editerprofil') }}" class="btn btn-info btn-lg">Modifier</a>
                    </div>
                </div>
                <div class="col-sm-3">
                
                </div>
            
        </div>
    </div>
@endsection

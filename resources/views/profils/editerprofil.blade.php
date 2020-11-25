@extends('espaceclients.navbar')

@section('contenu')
<center>
    <form method="POST" action="{{ action('ProfilController@updateProfil') }}">
        @csrf
        <div class="form-group col-sm-6">
                        {!! Form::label('prenom', 'Prenom:') !!}
                        {!! Form::text('prenom', Auth::user()->prenom, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Nom Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('nom', 'Nom:') !!}
                        {!! Form::text('nom', Auth::user()->nom, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', Auth::user()->email, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Password Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('password', 'Password:') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <!-- Fonction Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('fonction', 'Fonction:') !!}
                        {!! Form::text('fonction', Auth::user()->fonction, ['class' => 'form-control']) !!}
                    </div>
                    

                    <!-- Role_id Field -->
                    <!--
                    <div class="form-group col-sm-6">
                        {!! Form::label('role_id', 'Role id:') !!}
                        {!! Form::select('role_id',[], ['class' => 'form-control','placeholder' => 'Please Select']) !!}
                    </div>
                    -->
                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('profils.index') }}" class="btn btn-default">Annuler</a>
                    </div>
    </form>
    </center>
@endsection

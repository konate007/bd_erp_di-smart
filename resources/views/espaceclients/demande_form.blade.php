@extends('espaceclients.navbar')

@section('contenu')
<center>
<form method="POST" action="{{ action('EspaceClientController@registration') }}">
    @csrf
    <!-- Objet Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('objet', 'Objet:') !!}
        {!! Form::text('objet', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Departement Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('departement_id', 'Departement:') !!}
        {!! Form::select('departement_id',$departementItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
    </div>

    <!-- Projet User Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('projet_id', 'Projet:') !!}
        {!! Form::select('projet_id',$projetItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
    </div>

    <!-- Message Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('message', 'Message:') !!}
        {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Niveau Importance Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('niveau_importance_id', 'Niveau Importance:') !!}
        {!! Form::select('niveau_importance_id', $niveau_importanceItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
    </div>

    <!-- Type Demande Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('type_demande_id', 'Type Demande:') !!}
        {!! Form::select('type_demande_id',$type_demandeItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
    </div>

    <!-- Statut Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('statut', 'Statut:') !!}
        {!! Form::select('statut',['Ouverte','En cours','Fermée','En suspens'], null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
    </div>

    <!-- Responsable Field -->
    <!--
    <div class="form-group col-sm-6">
        {!! Form::label('responsable', 'Responsable:') !!}
        {!! Form::select('responsable', $responsableItems, null, ['class' => 'form-control','placeholder'=>'Please select']) !!}
    </div>
    -->

    <!-- Date fermeture Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('date_fermeture', 'Date fermeture:') !!}
        {!! Form::date('date_fermeture', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Soumettre', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('espaceclients.index') }}" class="btn btn-default">Annuler</a>
    </div>
    
</form>
</center>
@endsection

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Niveaux  d'importance
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('niveau__importances.show_fields')
                    <a href="{{ route('niveauImportances.index') }}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Demandes</h1>

        <!-- search form (Optional) -->
        <form action="/search" method="get" class="pull-center">
                <div class="input-group" style="width:300px; margin-left:1000px">
                    <input type="text" name="q" class="form-control" placeholder="Rechercher demandes"/>
                    <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
        </form>

        <h1 class="pull-right" style="margin-top:15px">

           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('demandes.create') }}">Ajouter</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('demandes.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


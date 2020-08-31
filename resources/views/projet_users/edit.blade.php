@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Projet  User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($projetUser, ['route' => ['projetUsers.update', $projetUser->id], 'method' => 'patch']) !!}

                        @include('projet_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
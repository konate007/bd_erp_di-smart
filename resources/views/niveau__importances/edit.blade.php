@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Niveau  Importance
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($niveauImportance, ['route' => ['niveauImportances.update', $niveauImportance->id], 'method' => 'patch']) !!}

                        @include('niveau__importances.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
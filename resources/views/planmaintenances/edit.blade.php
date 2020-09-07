@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Planmaintenance
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($planmaintenance, ['route' => ['planmaintenances.update', $planmaintenance->id], 'method' => 'patch']) !!}

                        @include('planmaintenances.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
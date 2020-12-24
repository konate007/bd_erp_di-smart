@extends('espaceclients.navbar')

@section('contenu')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                            @endif
                            <h2>{{  $success }} </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



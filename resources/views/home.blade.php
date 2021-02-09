@extends('master')

@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
                <h2>{{ __('Dashboard') }}</h2>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a href="{{route('index')}}">Nazad na pocetnu</a>
        </div>
    </div>
</div>
@endsection

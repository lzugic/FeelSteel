@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form action="{{route('login')}}" method="POST">
        <h2>{{ __('Uloguj se') }}</h2>
        <div class="form-group">
        @csrf
            <label for="name">{{ __('Korisnicko Ime') }}</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Korisnicko Ime">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Sifra') }}</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Sifra">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-default">{{ __('Uloguj se') }}</button>

        </form>
    </div>
    </div>
</div>


@endsection
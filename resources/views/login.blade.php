@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form action="login" method="POST">
        <h2>Uloguj se</h2>
        <div class="form-group">
        @csrf
            <label for="name">Korisnicko Ime</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Korisnicko Ime">
        </div>

        <div class="form-group">
            <label for="password">Sifra</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Sifra">
        </div>
        <button type="submit" class="btn btn-default">Uloguj se</button>
        </form>
    </div>
    </div>
</div>


@endsection
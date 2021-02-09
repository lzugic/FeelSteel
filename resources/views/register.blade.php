@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form action="register" method="POST">
        @csrf
        <h2>Prijavi se</h2>
        <div class="form-group">
            <label for="name">Korisnicko Ime</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Korisnicko Ime">
        </div>
        <div class="form-group">
            <label for="email1">Email Adresa</label>
            <input type="email" name="email" class="form-control" id="email1" placeholder="Email Adresa">
        </div>
        <div class="form-group">
            <label for="password">Sifra</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Sifra">
        </div>
        <button type="submit" class="btn btn-default">Prijavi se</button>
        </form>
    </div>
    </div>
</div>


@endsection
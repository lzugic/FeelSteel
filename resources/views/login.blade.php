@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form>
        <div class="form-group">
            <label for="username">Korisnicko Ime</label>
            <input type="username" class="form-control" id="username" placeholder="Korisnicko Ime">
        </div>
        <div class="form-group">
            <label for="email1">Email Adresa</label>
            <input type="email" class="form-control" id="email1" placeholder="Email Adresa">
        </div>
        <div class="form-group">
            <label for="password">Sifra</label>
            <input type="password" class="form-control" id="password" placeholder="Sifra">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </div>
</div>


@endsection
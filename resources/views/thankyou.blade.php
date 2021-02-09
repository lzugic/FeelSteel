@extends('master')
@section('content')
<div class="thank-container custom-product">
<div class="thank-text col-sm-10">
    <h2>Hvala, {{Session::get('user')['name']}} na Vasoj Porudzbini.</h1>
    <h5>Porudzbina je potvrdjena</h3>
    <a href="http://localhost/e-commerce-project/public/" class="btn btn-primary">Pocetna Strana</a>
</div>
</div>
@endsection
@extends('master')
@section('content')
<div class=" container detail-container">
    <div class="row">
    <div class="col-sm-6">
        <img class="detail-img" src="{{$product->galery}}">
    </div>
    <div class="col-sm-6">
        <a href="http://localhost/e-commerce-project/public/">Nazad</a>
        <h2>{{$product['name']}}</h2>
        <h3>Cena: {{$product['price']}} Dinara</h3>
        <h4>Opis: {{$product['description']}}</h4>
        <h4>Kategorija: {{$product['category']}}</h2>
        <br></br>
        <form method="POST" action="{{ url('add_to_cart') }}" >
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Dodaj u Korpu</button>
        </form>
        <br></br>
        <a href="ordernow" class="btn btn-success">Kupi Odmah</a>
        <br></br>
    </div>
    </div>
</div>
@endsection
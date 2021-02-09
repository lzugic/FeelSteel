@extends('master')
@section('content')

<div class="container detail-container">
    <div class="row">
    <div class="col-sm-6">
        <img class="detail-img img-responsive" src="{{ asset($product->galery)}}">
    </div>
    <div class="detail-item col-sm-6">
        <a href="{{route('index')}}">Nazad</a>
        <h2>{{$product['name']}}</h2>
        <h3>Cena: {{$product['price']}} Dinara</h3>
        <h4>Opis: {{$product['description']}}</h4>
        <br></br>
        <form method="POST" action="{{ asset('add_to_cart')}}" >
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary"><i class="fas fa-cart-plus fa-lg mr-2"></i>Dodaj u Korpu</button>
        </form>

    </div>
    </div>
</div>
@endsection
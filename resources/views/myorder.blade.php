@extends('master')
@section('content')
<div class="cart-container custom-product">
<div class="col-sm-10">
<div class="cart-wrapper">
  <h2>Moje Narudzbine:</h2>
    @foreach($orders as $order)
    <div class="row cart-list-devider">
    <div class="col-sm-3">
    <a href="details/{{$order->id}}">
      <img class="trending-img" src="{{$order->galery}}">
      </a>
      </div>
      <div class="col-sm-3">
      <div class="">
        <h2>Posiljka:{{$order->name}}</h2>
        <h4>Ime: {{$order->fname}} {{$order->lname}}</h4>
        <h4>Status Posiljke: {{$order->status}}</h4>
        <h4>Adresa: {{$order->address}}</h4>
        <h4>Broj Telefona: {{$order->number}}</h4>

      </div>
      </div>

    </div>
    @endforeach
  </div>

</div>
</div>
@endsection
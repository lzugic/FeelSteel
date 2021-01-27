@extends('master')
@section('content')
<div class="cart-container custom-product">
<div class="col-sm-10">
<div class="cart-wrapper">
  <h2>Rezultati Korpe:</h2>
  <a href="ordernow" class="btn btn-success">Naruci Odmah</a> <br><br>
    @foreach($products as $product)
    <div class="row cart-list-devider">
    <div class="col-sm-3">
    <a href="detail/{{$product->id}}">
      <img class="trending-img" src="{{$product->galery}}">
      </a>
      </div>
      <div class="col-sm-3">
      <div class="">
        <h2>{{$product->name}}</h2>
        <h4>{{$product->description}}</h4>
      </div>
      </div>
      <div class="col-sm-3">
        <a href="removecart/{{$product->cart_id}}" class="btn btn-warning">Izbrisi iz Korpe</a>
      </div>
    </div>
    @endforeach
  </div>
  <a href="ordernow" class="btn btn-success">Naruci Odmah</a> <br><br>

</div>
</div>
@endsection
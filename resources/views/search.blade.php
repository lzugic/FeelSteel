@extends('master')
@section('content')
<div class="search-container custom-product">
<div class="col-sm-4">
    <a href="#">filter</a>
</div>
<div class="col-sm-4">
<div class="search-wrapper">
  <h2>Rezultati Pretrage</h2>
    @foreach($products as $product)
    <div class="searched-item">
    <a href="detail/{{$product['id']}}">
      <img class="trending-img" src="{{$product['galery']}}">
      <div class="">
        <h2>{{$product['name']}}</h2>
        <h4>{{$product['description']}}</h4>
      </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
</div>
@endsection
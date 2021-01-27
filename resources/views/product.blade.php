@extends('master')
@section('content')
<div class=" custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="slider-img" src="{{ asset('../public/slike/4.jpg')}}">
    </div>

    <div class="item">
      <img class="slider-img" src="{{ asset('../public/slike/2.jpg')}}">
    </div>

    <div class="item">
      <img class="slider-img" src="{{ asset('../public/slike/3.jpg')}}">
    </div>

    <div class="item">
      <img class="slider-img" src="{{ asset('../public/slike/1.jpg')}}">
    </div>

    <div class="item">
      <img class="slider-img" src="{{ asset('../public/slike/5.jpg')}}">
    </div>
    <div class="carousel-caption">
            <h1 class="masthead-subheading">FeelSteel</h1>
            <p>Metalni namestaj!</p>
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="trending-wrapper">
  <h3>Trending Products</h3>
    @foreach($products as $product)
    <div class="trending-item">
    <a href="detail/{{$product['id']}}">
      <img class="trending-img" src="{{$product['galery']}}">
      <div class="">
        <h3>{{$product['name']}}</h3>
      </div>
      </a>
    </div>
    @endforeach
  </div>

</div>
@endsection
@extends('master')
@section('content')
<div class=" custom-product">
<ul class="nav navbar-nav">
  <li class="dropdown">
      <a class="dropdown-toggle category-meni" data-toggle="dropdown" href="#">Kategorije <span class="caret"></span></a>
      <ul class="dropdown-menu">
          @foreach($categories as $category)
            <li><a href="{{route('shop', ['category'=> $category->slug])}}">{{$category->name}}</a></li>
          @endforeach
      </ul>
    </li>

    <li class="dropdown">
      <a class="dropdown-toggle category-meni" data-toggle="dropdown" href="#">Cena <span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="{{route('shop', ['category'=> request()->category, 'sort'=> 'low_high'])}}">Od Najnize Do Najvece</a></li>
            <li><a href="{{route('shop', ['category'=> request()->category, 'sort'=> 'high_low'])}}">Od Najvece Do Najnize</a></li>
      </ul>
    </li>

    </ul>
<div class="shop-wrapper">
  <h2>{{$categoryName}}</h2>
 
    
    @foreach($products as $product)
    <div class="shop-item">
    <a href="details/{{$product['id']}}">
      <img class="shop-img img-responsive" src="{{$product['galery']}}">
      <div class="">
        <h4>{{$product['name']}}</h4>
      </div>
      </a>
      <h5 style="color: #fff;">Cena:{{$product['price']}}</h5>
    </div>
    @endforeach
  </div>

</div>
@endsection
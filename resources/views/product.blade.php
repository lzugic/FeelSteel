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
    <div class="carousel-caption ">
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

@if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
@endif

<!--Kategorije-->
<div class="category-wrapper" id="kategorije">
  <h2>Kategorije</h2>
    @foreach($categories as $category)
    <div class="category-item">

      <a href="{{route('shop', ['category'=> $category->slug])}}">
      <img class="category-img img-responsive col-md-12" src="{{$category->image}}">
        <div class="">
          <h3>{{$category->name}}</h3>
        </div>
      </a>

    </div>
    @endforeach
  </div><!--./category-->

<!--Najpopularniji Proizvodi-->
  <div class="trending-wrapper">
  <h2>Najpopularniji Proizvodi</h2>
    @foreach($products as $product)
    <div class="trending-item">
    <a href="details/{{$product['id']}}">
      <img class="trending-img img-responsive" src="{{$product['galery']}}">
      <div class="">
        <h3>{{$product['name']}}</h3>
      </div>
      </a>
    </div>
    @endforeach
    <a class="btn btn-warning btn-trending" href="shop">Jos Proizvoda</a>
  </div><!--./trending-->

<!-- O nama-->
  <div class="about-wrapper" id="o-nama">
  <h2>O nama</h2>
    <div class="about-item">
        <div>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel pretium nunc, nec consequat elit. Duis vel purus nec quam feugiat sagittis.
          Phasellus ut tortor sit amet libero consequat suscipit eget in felis. 
          Quisque in vehicula mi, quis iaculis purus. Nam sed porta dolor, quis aliquet ante.
          Interdum et malesuada fames ac ante ipsum primis in faucibus.
          Sed gravida tincidunt commodo. Morbi molestie augue augue, nec vehicula nibh sollicitudin in.
          Maecenas diam lorem, viverra at purus blandit, blandit molestie dolor.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Phasellus semper faucibus nisl, ac vulputate ligula imperdiet a.
          In ornare purus mauris, sit amet scelerisque sem ultricies elementum.
          Nulla ut ligula nec justo lacinia pulvinar eu a massa. Fusce a efficitur tortor.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel pretium nunc, nec consequat elit.
          Duis vel purus nec quam feugiat sagittis. Phasellus ut tortor sit amet libero consequat suscipit eget in felis.
          Quisque in vehicula mi, quis iaculis purus. Nam sed porta dolor, quis aliquet ante. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          Sed gravida tincidunt commodo. Morbi molestie augue augue, nec vehicula nibh sollicitudin in.
          Maecenas diam lorem, viverra at purus blandit, blandit molestie dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Phasellus semper faucibus nisl, ac vulputate ligula imperdiet a. In ornare purus mauris, sit amet scelerisque sem ultricies elementum.
          Nulla ut ligula nec justo lacinia pulvinar eu a massa. Fusce a efficitur tortor.  </p>

          <strong><h3>Narucite Vas namestaj: 011 123456 / +381 61 123456</h3></strong>
        </div>
    </div>
  </div><!--./about-->

</div>

@endsection
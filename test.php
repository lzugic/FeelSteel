<!--<div class="container custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!- Indicators --
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!- Wrapper for slides --
  <div class="carousel-inner">
    @foreach($products as $product)
    <div class="item {{$product['id'] == 1?'active':''}}">
      <img src="{{$product['galery']}}">
      <div class="carousel-caption">
        <h3>{{$product['name']}}</h3>
        <p>...</p>
      </div>
    </div>

    @endforeach
  </div>

  <!- Left and right controls --
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

@endsection

<div class="row">
@if($products->count()>0)
@foreach($products as $product)
    <div class="col-md-4 mb-5">
        <div class="card" style="width=18rem;">
        <div id="{{$product->id}}" class="carousel slide" data-ride="carousel" alt="Card Image" class="img-fluid">
        
            <div class="carousel-inner">
                @if($product->galery->count() > 0)
                    @for($i=0; $i < count($images = $product->galery()); $i++)
                    @if($i == 0)
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/slike/{{$images[$i]['galery']}}" alt="First Slide" style="witdh=100%; height=13rem;">
                        </div>
                    @endif
                    @endfor
                @endif
            </div>

        </div>
        </div>
    </div>

@endforeach
@endif
</div>-->
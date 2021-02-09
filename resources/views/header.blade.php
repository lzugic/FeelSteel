<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user')){
  $total = ProductController::cartItem();

}

?>
<div class="navbar navbar-fixed-top">

<nav class="nav navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{route('index')}}">FeelSteel</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{route('index')}}">Home</a></li>
        <li><a href="{{route('shop')}}">Svi Proizvodi</a></li>
        <li><a href="{{route('index')}}/#kategorije">Kategorije</a></li>
        <li><a href="{{route('index')}}/#o-nama">O Nama</a></li>
        
      </ul>

      <form action="search" class="navbar-form navbar-left ">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Pretrazi">
        </div>
        <button type="submit" class="btn btn-secondary search-btn">Pretraga</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
      @if(Session::has('user'))

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Session::get('user')['name']}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('cartlist')}}">Korpa({{$total}})</a></li>
            <li><a href="{{route('myorder')}}">Moje Narudzbine</a></li>
            @if(Session::get('user')['is_admin']==true)
            <li><a href="{{route('dashboard')}}">Admin Panel</a></li>
            @endif
            <li role="separator" class="divider"></li>
            <li><a href="{{route('logout')}}">Izloguj se</a></li>
            
          </ul>
        @else
        <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-user"></span>Uloguj Se</a></li>
        <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-log-in"></span> Prijavi Se</a></li>

        @endif
      </ul>
    </div>
  </div><!--/.container-fluid  -->
</nav>
</div>
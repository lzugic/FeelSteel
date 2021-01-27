<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user')){
  $total = ProductController::cartItem();

}

?>
<div class="navbar navbar-fixed-top">
<nav class="nav">
  <div class="container-fluid ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="nav navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="nav-link js-scroll-trigger navbar-brand" href="#">Feel Steel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav">
        <li class="nav-item"><a href="http://localhost/e-commerce-project/public/">Home <span class="nav-link js-scroll-trigger sr-only">(current)</span></a></li>

        <li class="dropdown nav-item">
          <a href="#" class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proizvodi<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Stolovi</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Stolice</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Police</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Lampe</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Ljulljaske</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">O Nama</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Kontakt</a></li>
      </ul>

      <form action="search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Pretrazi">
        </div>
        <button type="submit" class="btn btn-secondary">Pretraga</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cartlist">Korpa({{$total}})</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="myorder">Moje Narudzbine</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['username']}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Profil</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Dodaj Proizvod</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="myorder">Narudzbine</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Podesavanja</a></li>
            <li class="nav-item" role="separator" class="divider"></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout">Izloguj se</a></li>
            
          </ul>
        </li>
        @else
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login">Login</a></li>

        @endif
      </ul>
          
  </div> <!-- /.container-fluid -->
</nav>
</div>
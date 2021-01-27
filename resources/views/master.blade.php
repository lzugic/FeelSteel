<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feel Steel</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <!--Jquery-->
<script	src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>

/*Carousel*/
.custom-login{
    height: 500px;
    padding-top: 100px;
}
.slider-img{
    height: 900px !important;
    width: 100%;
    vertical-align: middle;
    border-style: none;
}
.carousel-caption {
    color: #d2903a;
    font-size: 50px;
    background: rgba(0, 0, 0, 0.5);
    margin-left: 370px;
    margin-right:200px;
    width: 400px;
    border-radius: 15px;

}
.carousel-caption h1{
    font-family: "Droid Serif", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";    font-size: 40px;
    font-style: italic;
    color: #fff !important;
    border-bottom: 2px solid #fff;
}
.carousel-caption p{
    font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 3.25rem;
    font-weight: 700;
    line-height: 3.25rem;
    margin-bottom: 2rem;
}

/*Navbar*/
.container-fluid{
    background: rgba(0, 0, 0, 0.3);

}
.nav a{
    transition: 0.3s ease;
    color: white;
    text-decoration: none;
    border-bottom: 2px solid transparent;
    font-size: 17px;

}
nav ul {
    line-height: 60px;
    list-style: none;
    background: rgba(0, 0, 0, 0);
    font-family: Noto Sans, sans-serif;
    color: rgba(0, 0, 0, 0.2);
    padding: 0;
    text-align: right;
    margin: 0;
    padding-right: 40px;
    transition: 1s;
}
nav a:hover {
    padding: 11px; 
    color: rgba(0, 0, 0, 0.6);
}

/*Trending Products*/
.trending-img{
    height: 300px;
}
.trending-item{
    float: left;
    width: 20%;
    transition: transform .2s;

}
.trending-item:hover{
    transform: scale(1.2);
}
.trending-wrapper{
    margin: 30px;
    text-align: center;
}

/*Detail Page*/
.detail-img{
    height: 400px;
    transition: transform .2s;
}
.detail-img:hover{
    transform: scale(1.5);
}
.detail-container{
    padding-top:180px;
    padding-bottom:15px;
}
/*Search bar*/
.search-box{
    width: 500px !important;
    margin-left: 160px;
    background: rgba(0, 0, 0, 0.4);
    color: #fff;
}
.search-container{
    padding-top:60px;
}
.search-wrapper{
    margin: 30px;
    text-align: center;
}

</style>
</html>
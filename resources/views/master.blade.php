<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Feel Steel</title>
      <!--Jquery-->
<script	src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
  

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>

* {
  box-sizing: border-box;
}

body{
    background-color:#232323;
    
}
body a{
    color: #d2903a; 
}
body a:hover{
    color: #d2903a; 

}

/* Media Queries: Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}
    
    .carousel-caption {
        margin: 0 9% 0 9% !important;
    }

    .search-box{

        float: right;
        display:block;
        width: 100% !important;
        margin: 0 !important;
        padding: 14px !important;
    }
    .search-btn{
        float: none;
        display:block;
    }
    .category-item{
        width:100% !important;
    }
    .trending-item{
        width: 100% !important;
    }
    .btn-trending{
        margin-left: 24px !important;
    }
    .shop-item{
        width: 100% !important;
        
    }

}

/* Media Queries: Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
    
    .carousel-caption {
        margin: 0 9% 0 9% !important;
    }

    .search-box{

        float: right;
        display:block;
        width: 100% !important;
        margin: 0 !important;
        padding: 14px !important;
    }
    .search-btn{
        float: none;
        display:block;
    }
    .category-item{
        width:100% !important;
    }
    .trending-item{
        width: 100% !important;
    }
    .btn-trending{
        margin-left: 24px !important;
    }
    .shop-wrapper h4, h5{
        text-align: left !important;
    }
    .shop-item{
        width: 100% !important;
        border-bottom: 1px solid #fff !important;

    }
    .category-meni{
        display: block;
    }
    .category-meni li{
        font-family: "Droid Serif", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;    font-size: 40px !important;
        color: #fff !important;
    }

}

/*Forms*/
.form-group input{
    color: #fff;
    background: rgba(0, 0, 0, 0.1);
}
.form-group{
    color: #fff;

}

/*Carousel*/
.custom-login{
    height: 500px;
    padding-top: 100px;
}
.custom-login h2{
    color: #C8C8C8;
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
    margin: 0 15% 0 15%;
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
    background: rgba(0, 0, 0, 0.3) !important;

}
.nav a{
    transition: 0.3s ease;
    color: white;
    text-decoration: none;
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
}

/*Trending Products*/
.trending-img{
    height: 210px;
    max-width: 180px;
}
.btn-trending{
    width: 250px;
    margin-left:800px;
}
.trending-item{
    float: left;
    width: 13%;
    transition: transform .2s;
    padding-top: 25px;
    padding-left:105px;
}
.trending-wrapper{
 
    float: left;;
}

.trending-wrapper h2{
    font-family: "Droid Serif", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";    font-size: 40px;
    font-style: italic;
    border-bottom: 2px solid #C8C8C8;
    color: #C8C8C8;
    text-align: center;
    }

/*Category*/
.category-img{
    height: 300px;
}

.category-item{
    float: left;
    width: 20%;
    transition: transform .2s;
    padding-top: 25px;
    padding-left:45px;

}
.category-item:hover{
    transform: scale(1.2);
}
.category-wrapper{
    margin: 30px;
    text-align: center;
    margin-top: 40px;
    
}
.category-wrapper h2{
    font-family: "Droid Serif", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";    font-size: 40px;
    font-style: italic;
    border-bottom: 2px solid #C8C8C8;
    color: #C8C8C8;
}
.category-meni{
    float: left;
    font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    background-color: rgba(0, 0, 0, 0.2);
    padding-top: 43px !important;
    padding-left: 20px !important;

}

/*About Page */
.about-wrapper{
    margin: 30px;
    text-align: center;
    margin-top: 40px;
    float: left;
}
.about-wrapper h2{
    font-family: "Droid Serif", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";    font-size: 40px;
    font-style: italic;
    border-bottom: 2px solid #C8C8C8;
    color: #C8C8C8;
}
.about-wrapper p{
    color: #C8C8C8;
    font-size: 21px;

}
.about-wrapper h3{
    color: #e62300;
}
.about-item{
    padding-top: 25px;
}

/*Detail Page*/
.detail-img{
    height: 400px;
    transition: transform .2s;
    width: 380px;
    margin-bottom:50px;
}
.detail-img:hover{
    transform: scale(1.3);
}
.detail-container{
    padding-top:180px;
    padding-bottom:15px;
}
.detail-item{
    color: #C8C8C8;
}

/*Search bar*/
.search-box{
    width: 400px !important;
    margin-left: 73px;
    background: rgba(0, 0, 0, 0.4);
    color: #fff;
}
.search-container{
    padding-top:60px;
}
.search-container h2{
    color: #fff;
}
.searched-item{
    border-bottom: 1px solid #fff !important;
    padding-top: 15px;
}

/*Cart Page*/
.cart-container{
    padding-top:90px;
    padding-bottom:15px;
}
.cart-wrapper{
    margin: 30px;
}
.cart-wrapper h2, h4{
    color: #C8C8C8;
}
.cart-list-devider{
    text-align: center;
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}

/*Shop Page*/
.shop-item{
    float: right;
    width: 12%;
    padding-top: 25px;
    margin-top: 40px;
    margin-bottom: 30px;
    transition: transform .2s;
}
.shop-img{
    height: 210px;
    max-width: 190px;

}
.shop-wrapper{
    padding-top:70px;
    margin: 30px;
    text-align: center;
}
.shop-wrapper h2{
    border-bottom: 2px solid #C8C8C8;
    color: #C8C8C8;
}
.product-header{
    display: flex;
    justify-content: space-between;
    float: right !important;
}

/*Thank You Page*/
.thank-container{
    padding-top: 90px;
}
.thank-text{
    text-align: center;
    padding-left: 300px;
    padding-bottom: 25px;

}

/*Order Table*/
.order-table{
    color: #fff;
    background: #646464;
    border-radius: 5px;
    width: 35%;
    margin-left: 700px;
    font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
.order-form{
    padding-left:680px;
}
.order-form button{
    margin-left:260px;

}

/*Footer*/
.panel-footer{
    text-align: center;
    background: #696969;
    color: #fff;
}
.panel-body{
    background: #3F3F3F;
}
.panel{
    border: none;
    position: relative;
    width: 100%;
    bottom: 0;
    height: 60px;
    clear: both;
}

</style>
</html>
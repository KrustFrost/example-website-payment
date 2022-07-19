<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Fonts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>

        </style>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
     <div class="fixed-top bg-light lg:flex justify-around shadow-md">
    <nav class="navbar navbar-expand-lg navbar-light ">

  <div class="container-fluid  md:gap-0 lg:gap-10">

    <a href="/" ><span class="text-sm text-gray-700 dark:text-gray-500 hover:text-blue-300">Inter<span class="text-green-500">Pay</span></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0 md:gap-0 lg:gap-10">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Available Payments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact us</a>
        </li>
        <li class="nav-item m-2">
        @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
            @endif
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="" style="  display: block; 
margin-top:50px;
  margin-left: auto;
  margin-right: auto;
  width: 75%;">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://pbs.twimg.com/media/DdptW7EVwAEdEkw?format=jpg&name=4096x4096" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuY4inTQYGSU39sZqRYqVvOocabRVQGjsOvQ&usqp=CAU" class="d-block w-100 h-2/4 md:h-auto" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt4IBpyzsfYVfHo3n___tyPGzzPK0dAlLUeA&usqp=CAU" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="d-flex justify-content-around gap-10 m-5">
<div class="grid grid-cols-1 md:grid-cols-3  ">
    
  <div class="card shadow-md m-5">
    <img class="w-6/12  mx-auto "  src="https://www.pagibigfund.gov.ph/images/homepage/Icon%203_Digital%20(Mobile_Internet).png" alt="">
  <div class="card-body">
    <h5 class="card-title text-center">Improved Payment Transaction</h5>
    <p class="card-text text-center">Payments in Interpay are much more efficient and productive, making payments accessible to any payment methods</p>
  </div>
</div>

  <div class="card shadow-md m-5" >
    <img  class="w-6/12 mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo9Yn-AaD8lH-n-wrIv7NGgKiyOH3o4dWjfg&usqp=CAU" alt="">
  <div class="card-body">
    <h5 class="card-title text-center">Security are definitely good and secure</h5>
    <p class="card-text text-center">We can assure you that the payments here that pay in this application are safe</p>
  </div>
</div>
<div class="card shadow-md m-5" >
    <img class="w-6/12 mx-auto"  src="https://static.thenounproject.com/png/14937-200.png" alt="">
  <div class="card-body">
    <h5 class="card-title text-center">From Traditional to Modernized Payment</h5>
    <p class="card-text text-center">We would like to make our payments to be easy and hassle free to every students when paying their fees in this school by using this application</p>
    </div>
  </div>
</div>
</div>
<footer class="bg-green-400 text-center">
    Made by Chris Michael Angeles in Interface Computer College - Caloocan
</footer>
<script>
var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
</script>
    </body>
</html>

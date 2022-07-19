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
  <!--
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
-->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://pbs.twimg.com/media/DdptW7EVwAEdEkw?format=jpg&name=4096x4096" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://pbs.twimg.com/media/DB64lBgUAAA8NjH.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
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

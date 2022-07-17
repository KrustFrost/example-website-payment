<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around sticky-top">

        <div>
        <img src="{{ asset('storage/icclogo.png')}}" width="200">
        </div>
        <div class="m-2">
            <a href="#" class="m-3">Available Payments</a>
            <a href="#" class="m-3">About</a>
            <a href="#" class="m-3">Contact Us</a>
            
            </div>
        </div>
        <div>
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
            </div>
        </nav>
    </body>
</html>

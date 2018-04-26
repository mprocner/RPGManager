<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/app.css">
    <!-- Styles -->
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script>
        window.LaravelCsrf = '<?php echo csrf_token(); ?>';
    </script>
</head>
<body>
<div id="app" class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    @endauth
        </div>
    @endif

    <div class="content">
        @yield('content')
    </div>
    <example-component></example-component>
    <roller-component></roller-component>
</div>
<script src="/js/app.js"></script>
</body>
</html>

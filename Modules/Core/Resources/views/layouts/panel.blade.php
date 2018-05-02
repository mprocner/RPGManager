<!--TEMPLATE FOR ADMIN PANEL -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script>
        window.LaravelCsrf = '<?php echo csrf_token(); ?>';
    </script>
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">RPG Manager</a>
                </div>

                <ul class="nav navbar-nav navbar-left">
                    @auth

                    <li>
                        <a href="{{action('\Modules\RoomManager\Http\Controllers\RoomManagerController@create')}}" class="text-lg block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                            Create Room
                        </a>
                    </li>
                    @endguest

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li>
                        <a href="{{ route('login') }}" class="text-lg block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="text-lg block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                            Register
                        </a>
                    </li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>







        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

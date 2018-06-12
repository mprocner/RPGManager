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

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{action('\Modules\Core\Http\Controllers\HomeController@index')}}">RPG Manager</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="nav navbar-nav mr-auto" id="main-navbar">
                    @auth

                    <li class="nav-item">
                        <a class="nav-link" href="{{action('\Modules\RoomManager\Http\Controllers\RoomManagerController@create')}}" >
                            Create Room
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('\Modules\RoomManager\Http\Controllers\RoomInvitationsController@roomsList')}}" >
                            Invitations
                        </a>
                    </li>
                    @endguest

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li>
                        <a href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" >
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
        </nav>
            </div>







        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

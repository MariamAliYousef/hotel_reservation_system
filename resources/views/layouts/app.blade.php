<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/fontawesome-all.min.js') }}" defer></script>
	<!--admin js------------------------------------------------------------------------>
	<script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
	<script src="{{ asset('admin/js/fontawesome-all.min.js') }}" defer></script>
	<script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/CSS/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('style/CSS/fontawesome-all.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('style/CSS/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/CSS/commonStyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/CSS/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/CSS/reviewFeedback.css') }}" />
	<!--admin pages style---------------------------------------------------------------->
	<link rel="stylesheet" href="{{ asset('admin/css/admin_style.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/fontawesome-all.min.css') }}" />
	
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif @else
					
					
					@if(Auth::user()->role == 1)
					<li class="nav-item"><a href="{{ route('controll') }}" class="nav-link">controll</a></li>
					@endif
					
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="single_rooms.html" class="nav-link">Rooms</a></li>
                    <li class="nav-item"><a href="Restaurant.html" class="nav-link">Restaurant</a></li>
                    <li class="nav-item"><a href="halls" class="nav-link">Halls</a></li>
                    <li class="nav-item"><a href="GOLF.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="History.html" class="nav-link">History</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
    </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>CarGarage</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="/style/slider.css">
    <link rel="stylesheet" type="text/css" href="/style/mystyle.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm nav_bg_color">
            <div class="container">
                <a class="navbar-brand  logo" href="{{ url('/') }}">
                    CarGarage
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto pl-5">
                              <li class="nav-item active text_color">
                                <a class="nav-link text_color" href="{{route('home.index')}}">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link text_color" href="{{route('AllCar.allcarbrands')}}" id="navbarDropdown">
                                  BRANDS
                                </a>
                              </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle text_color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"                          aria-expanded="false">
                                  CATEGORIES
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{route('AllCar.shownewcars')}}">NEW</a>  
                                  <a class="dropdown-item" href="{{route('AllCar.showrentcars')}}">RENT</a>
                                  <a class="dropdown-item" href="{{route('AllCar.showsellcars')}}">SELL</a>
                                </div>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link  text_color" href="/post">POST CAR SELL/RENT</a>
                              </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text_color" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text_color" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text_color" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @can('admin')
                                     <a class="dropdown-item" href="/admin">
                                        {{ __('user administration') }}
                                    </a>
                                    @endcan
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        <main class="container">
            @yield('content')
        </main>
        <!-- ______________________________________________________Bottom Menu ______________________________-->


<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>

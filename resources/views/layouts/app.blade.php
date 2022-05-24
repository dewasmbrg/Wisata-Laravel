<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/function.js') }}" defer></script>
    <script src="{{ asset('js/dialogWisata.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
    <script src="asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==') }}" crossorigin="anonymous" defer></script>
    <script src="{{ asset('jquery/jquery-ui.js') }}" defer></script>
    <script src="{{ asset('jquery/jquery.js') }}" defer></script>
    <script src="{{ asset('jquery/jquery-ui.min.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <link rel="icon" href="{{ asset('pict/logo.png') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('pict/logo.png') }}" alt="Wisata Sumatera" class="web-icon">
                    <label class="logo-label">{{ config('app.name', 'Wisata Sumatera') }}</label>
                </a>
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

                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('beranda.index') }}">{{ __('Beranda') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('wisata') ? 'active' : '' }}" href="{{ route('wisata.index') }}">{{ __('Wisata') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('hotel') ? 'active' : '' }}" href="{{ route('hotel.index') }}">{{ __('Hotel') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('cs') ? 'active' : '' }}" href="{{ route('cs.index') }}"><i class="fas fa-user-friends"></i>
                                {{ __('Customer Service') }}</a>
                        </li>

                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link alert-info" href="{{ route('login') }}" id="login-btn">{{ __('Login / Register') }}</a>
                        </li>
                        @endif

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle alert-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                @can('role-create')
                                <a class="dropdown-item" href="{{route('roles.index')}}">Manage Roles</a>
                                @endcan
                                @can('user-create')
                                <a class="dropdown-item" href="{{route('users.index')}}">Manage Users</a>
                                @endcan

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main class="py-4 container">
        @yield('content')
    </main>

    <footer>
        <div id="fotContainer">
            <ul>
                <li id="iconFooter"><a href="https://www.youtube.com/channel/UCviZmDYVb6CPyrb0PGnlvWg?view_as=subscriber" target="blink"><i class="fab fa-youtube"></i></a></li>
                <li id="iconFooter"><a href="https://twitter.com/PariwisataSuma2" target="blink"><i class="fab fa-twitter"></i></a></li>
                <li id="iconFooter"><a href="https://www.instagram.com/pariwisatasumatera_official/" target="blink"><i class="fab fa-instagram"></i></a></li>
                <li id="iconFooter"><a href="https://www.facebook.com/pariwisata.sumatera.9/" target="blink"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>
        <label id="labelFooter">&copy; 2020 D3TI2 | Kelompok 06</label>
    </footer>
</body>

</html>

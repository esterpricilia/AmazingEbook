<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Amazing E-Book</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="background-color: #AFCAE8;">
            <div class="container ">
                <a class="navbar-brand " href="{{ url('/') }}" style="font-size: 40px;">
                    Amazing E-Book
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto text-dark bg-warning" >
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" >{{ __('Log In') }}</a>
                                </li>
                            @endif

                        @else
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @guest
        @else
            <div class="bg-warning text-center">
                <a href="/home" style="text-decoration: none;font-size: 25px; color: black; margin-right: 50px;">Home</a>
                <a href="{{route( 'cart', Auth::user()->id )}}" style="text-decoration: none;font-size: 25px; color: black; margin-right: 50px;">Cart</a>
                <a href="{{route( 'profile', Auth::user()->id )}}" style="text-decoration: none;font-size: 25px; color: black; margin-right: 50px;">Profile</a>
                
                
                    @if(Auth::user()->role == 'Admin' )
                        <a href="" style="text-decoration: none;font-size: 25px; color: black;">Account Maintanance</a>
                    @endif
                
            </div>
        @endguest

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="mt-5 " style="background-color: #AFCAE8">
            <h5 class="text-center p-2">© Amazing E-book 2022</h5>
        </footer>
    </div>
</body>
</html>

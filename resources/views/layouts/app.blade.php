<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- icono --}}
    

    {{-- icono --}}
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="/storage/imagenes/logo.jpeg">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm ">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white size1" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white size1" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('platillos') }}">
                                        Menú
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    

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

        <main class="py-4">
            @yield('content')

        </main>

        <footer class="bg-dark text-white py-5 mt-2 ">
            <div class="container">
                <div class="row container atras">
                    {{-- Sobre nosotros --}}
                    <div class="col-md-4 footer-col">
                        <h3 class="text-uppercase">Sobre Nosotros</h3>
                        <p> Nuestro restaurante 'Fondita' de reciente inauguración, 
                            tiene como objetivo llegar a todos los gustos con una 
                            amplia y variada carta. Disponemos de un amplio, acogedor 
                            y atractivo local para celebrar todo tipo de eventos </p>
                        
                    </div>
                    {{-- Donde nos ubicamos --}}
                    <div class=" col-md-4 ">
                        <h3 class="text-uppercase">Donde nos ubicamos</h3>
                        <div class="d-flex  align-items col-7 ">
                            
                                <img src="/storage/imagenes/lugar.png" alt="lugar" class="w-100 img-logo mr-2">
                                <p>Río Pánuco 6135,Jardines de San Manuel, 72570 Puebla, Pue.</p>
                               
                            
                        </div>
                        
                    </div>
                    {{-- redes sociales --}}
                    <ul class="col-3 list-unstyled ">
                        <h3 class="text-uppercase">Redes Sociales</h3>
                        <li class="d-flex justify-content-between mt-4">
                            
                            <a href="https://www.facebook.com/lafonditacocina/" class="text-reset">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="#" class="text-reset">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="https://www.instagram.com/explore/locations/242253191/la-fondita/?hl=es" class="text-reset">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="#" class="text-reset">
                                <i class="fab fa-pinterest-p fa-2x"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </footer>
    </div>
    @yield('javascript')
</body>
</html>

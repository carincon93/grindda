<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="application-name" content="Matriz de fitotectura">
    <meta name="author" content="GRINDDA">
    <meta name="description" content="El grupo de Investigación de Diseño y Desarrollo Aplicado GRINDDA es un grupo Interdisciplinario, del Centro de Procesos Industriales y Construcción del SENA Regional Caldas, reconocido por COLCIENCIAS y con categoría C">
    <meta name="keywords" content="grupo de investigación, desarrollo aplicado, diseño, sena, grindda, centro de procesos industriales y construcción, arquitectura, software, construcción, materiales, desarrollo humano, educación, desarrollo experimental, recursos naturales, sostenibilidad ambiental, colombia, manizales, caldas">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GRINDDA') }}</title>


    <!-- 2 -->
     @stack('scripts')


    <!-- Inline Scripts  -->
    <script>
    window.asset = "{{ asset('') }}";
    </script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- 1 -->
</head>
<body class="bg-white {{ Request::is('/') ? 'home' : '' }}">
    <div id="app" class="mh-vh">
        <nav class="navbar navbar-expand-md p-3 w-75 m-auto">
            <div class="container">
                <a class="navbar-brand mr-5" href="{{ url('/') }}">
                    <img src="{{asset('images/home/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Request::is('proyectos*') ? 'active' : '' }}">
                            <a class="nav-link" href="#">Proyectos</a>
                        </li>
                        <li class="nav-item {{ Request::is('publicaciones*') ? 'active' : '' }}">
                            <a class="nav-link" href="#">Publicaciones</a>
                        </li>
                        <li class="nav-item {{ Request::is('eventos*') ? 'active' : '' }}">
                            <a class="nav-link" href="#">Eventos</a>
                        </li>
                        <li class="nav-item {{ Request::is('equipo*') ? 'active' : '' }}">
                            <a class="nav-link" href="#">Equipo</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav social-network">
                        <li class="nav-item mt-1">
                            <a class="nav-link facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item mt-1">
                            <a class="nav-link twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item mt-1">
                            <a class="nav-link flickr" href="#" target="_blank"><i class="fab fa-flickr"></i></a>
                        </li>
                        <li class="nav-item mt-1">
                            <a class="nav-link instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <footer>
        <div class="container">
            <div class="d-flex">
                <figure>
                    <img src="/images/home/logo.png">
                </figure>
                <ul class="list-group list-group-horizontal social-network">
                    <li class="list-inline">
                        <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline">
                        <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline">
                        <a class="flickr" href="#" target="_blank"><i class="fab fa-flickr"></i></a>
                    </li>
                    <li class="list-inline">
                        <a class="instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
</body>
</html>

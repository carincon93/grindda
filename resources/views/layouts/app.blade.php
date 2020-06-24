<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="application-name" content="Matriz de fitotectura">
    <meta name="author" content="GRINDDA">
    <meta name="description" content="El grupo de Investigación de Diseño y Desarrollo Aplicado GRINDDA es un grupo Interdisciplinario, del Centro de Procesos Industriales y Construcción del SENA Regional Caldas, reconocido por COLCIENCIAS y con categoría C">
    <meta name="keywords" content="grupo de investigación, desarrollo aplicado, diseño, sena, grindda, centro de procesos industriales y construcción, arquitectura, software, construcción, materiales, desarrollo humano, educación, desarrollo experimental, recursos naturales, sostenibilidad ambiental, colombia, manizales, caldas">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GRINDDA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
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
    <link title="timeline-styles" rel="stylesheet" href="https://cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">
</head>
<body>
    @stack('header')
    <div id="app" class="mh-vh">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-pagina fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong>GRIN</strong>DDA
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown">
                            <a id="navbarDropdownLinks" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                ¿Quiénes somos? <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownLinks">
                                <a class="dropdown-item" href="{{ route('quienes_somos.informacion_general') }}">Información general</a>
                                <a class="dropdown-item" href="{{ route('quienes_somos.integrantes') }}">Integrantes</a>
                                <a class="dropdown-item" href="{{ route('quienes_somos.lineas_investigacion') }}">Líneas de investigación</a>
                            </div>
                        </li>
                        <li class="nav-item {{ Request::is('semilleros') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('semilleros') }}">Semilleros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdownPublicaciones" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Publicaciones <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPublicaciones">
                                <a class="dropdown-item" href="{{ route('publicaciones', 'revista') }}">Revistas</a>
                                <a class="dropdown-item" href="{{ route('publicaciones', 'boletin') }}">Boletines</a>
                                <a class="dropdown-item" href="{{ route('publicaciones', 'libro') }}">Libros</a>
                                <a class="dropdown-item" href="{{ route('publicaciones', 'articulo') }}">Artículos</a>
                            </div>
                        </li>
                        <li class="nav-item {{ Request::is('proyectos*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('proyectos') }}">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <li class="nav-item {{ Request::is('aplicaciones*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('aplicaciones') }}">Aplicaciones</a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <!-- <li class="nav-item {{ Request::is('aplicaciones*') ? 'active' : '' }}"> -->
                            <li class="">
                                <a class="nav-link" href="{{ route('contacto') }}">Contactenos</a>
                            </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdownProyectos" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Eventos <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownProyectos">
                                @foreach ($ano as $key => $evento)
                                    <a class="dropdown-item" href="{{ route('eventos', $evento->ano) }}">{{ $evento->ano }}</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto login-dropdown">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/panel') }}">{{ __('Panel') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
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

        <main class="pt-pagina">
            @yield('content')
        </main>
    </div>
    <footer class="footer footer-pages">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 logo-footer-mobile">
                    <img src="{{ asset('images/grindda-logo.png')}}" alt="" width="180" class="img-fluid logo-footer">
                </div>
                <div class="col-md-3 col-sm-12 list-footer-mobile">
                    <h4>Información</h4>
                    <ul class="list-unstyled">
                        <li class="text-muted">Kilómetro 10 Vía al Magdalena</li>
                        <li class="text-muted">SENA Regional Caldas</li>
                        <li class="text-muted">SENNOVA - GRINDDA-CPIC</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-12 list-footer-mobile">
                    <h4>Contácto</h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:8748444" class="text-muted">Línea Manizales: (6) 874 8444 Ext. 62441</a></li>
                        <li><a href="mailto:informacion@grindda.com" class="text-muted">informacion@grindda.com</a></li>
                        <li><a href="http://www.grindda.com" class="text-muted">GRINDDA</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-12 list-footer-mobile">
                    <h4>Redes sociales</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/GrupoGRINDDA/" target="_blank">
                                <i class="fab fa-facebook-f color-facebook animated"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/GrupoGRINDDA" target="_blank">
                                <i class="fab fa-twitter animated"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/GrupoGRINDDA/" target="_blank">
                                <i class="fab fa-instagram color-instagram animated"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="http://procesosindustrialesyconstruccion.blogspot.com.co/" target="_blank">
                                <i class="fab fa-blogger-b color-blogger animated"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-footer">
                <p class="small-text muted">
                    &copy; <span class="company">SENNOVA</span> {{ date('Y') }}
                </p>
                @stack('creditos')
                <p class="footer-desc">
                    {{-- <a href="{{ route('politicas') }}"><strong>Política de privacidad</strong></a> --}}
                </p>

            </div>
        </div>
    </footer>
</body>
</html>

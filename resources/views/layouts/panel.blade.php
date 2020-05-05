<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GRINDDA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-panel fixed-top">
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
                        <button type="button"  @click="staticPosition = true" class="btn"><i class="fas fa-bars"></i></button>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        @auth
            <vs-sidebar v-model="staticPosition">
                <section slot="header" class="d-flex align-items-center flex-column justify-content-center">
                    <img src="{{ Storage::url(Auth::user()->foto) }}" alt="" class="img-fluid img-perfil rounded-circle mb-3">
                    <h4 class="text-capitalize">{{ Auth::user()->nombre }}</h4>
                </section>
                <section>
                    {{-- <vs-sidebar-item index="1" icon-pack icon="fa-fw fas fa-tachometer-alt">
                        &nbsp; Dashboard
                    </vs-sidebar-item>

                    <vs-sidebar-item index="2" icon-pack icon="fa-fw fas fa-id-card-alt">
                        &nbsp; Perfíl
                    </vs-sidebar-item> --}}

                    <vs-sidebar-group title="Ítems - páginas" icon-pack icon="fa-fw far fa-images">
                        <vs-sidebar-item index="1" icon-pack icon="fa-fw far fa-images" href="{{ route('carousel.index') }}" class="{{ Request::is('panel/carousel*') ? 'active' : '' }}">
                            &nbsp; Carousel
                        </vs-sidebar-item>
                        <vs-sidebar-item index="2" icon-pack icon="fa-fw far fa-images" href="{{ route('fondos.index') }}" class="{{ Request::is('panel/fondos*') ? 'active' : '' }}">
                            &nbsp; Fondo principal
                        </vs-sidebar-item>
                    </vs-sidebar-group>

                    <vs-sidebar-item index="3" icon-pack icon="fa-fw fas far fa-handshake" href="{{ route('aliados.index') }}" class="{{ Request::is('panel/aliados*') ? 'active' : '' }}">
                        &nbsp; Aliados
                    </vs-sidebar-item>
                    <vs-sidebar-item index="4" icon-pack icon="fa-fw fab fa-android" href="{{ route('aplicaciones.index') }}" class="{{ Request::is('panel/aplicaciones*') ? 'active' : '' }}">
                        &nbsp; Aplicaciones
                    </vs-sidebar-item>
                    <vs-sidebar-item index="5" icon-pack icon="fa-fw fas fa-user-graduate" href="{{ route('aprendices.index') }}" class="{{ Request::is('panel/aprendices*') ? 'active' : '' }}">
                        &nbsp; Aprendices
                    </vs-sidebar-item>
                    <vs-sidebar-item index="7" icon-pack icon="fa-fw far fa-calendar-alt" href="{{ route('eventos.index') }}" class="{{ Request::is('panel/eventos*') ? 'active' : '' }}">
                        &nbsp; Eventos
                    </vs-sidebar-item>
                    <vs-sidebar-item index="8" icon-pack icon="fa-fw fas fa-flask" href="{{ route('grupos_investigacion.index') }}" class="{{ Request::is('panel/grupos_investigacion*') ? 'active' : '' }}">
                        &nbsp; Grupos de investigación
                    </vs-sidebar-item>
                    <vs-sidebar-item index="9" icon-pack icon="fas fa-bezier-curve" href="{{ route('lineas_investigacion.index') }}" class="{{ Request::is('panel/lineas_investigacion*') ? 'active' : '' }}">
                        &nbsp; Líneas de investigación
                    </vs-sidebar-item>
                    <vs-sidebar-item index="10" icon-pack icon="fa-fw fas fa-book" href="{{ route('programas_formacion.index') }}" class="{{ Request::is('panel/programas_formacion*') ? 'active' : '' }}">
                        &nbsp; Programas de formación
                    </vs-sidebar-item>
                    <vs-sidebar-item index="11" icon-pack icon="fa-fw fas fa-project-diagram" href="{{ route('proyectos.index') }}" class="{{ Request::is('panel/proyectos*') ? 'active' : '' }}">
                        &nbsp; Proyectos
                    </vs-sidebar-item>
                    <vs-sidebar-item index="12" icon-pack icon="fa-fw fas fa-book" href="{{ route('publicaciones.index') }}" class="{{ Request::is('panel/publicaciones*') ? 'active' : '' }}">
                        &nbsp; Publicaciones (Libros/Articulos)
                    </vs-sidebar-item>
                    <vs-sidebar-item index="13" icon-pack icon="fa-fw fas fa-user-cog" href="{{ route('roles.index') }}" class="{{ Request::is('panel/roles*') ? 'active' : '' }}">
                        &nbsp; Roles
                    </vs-sidebar-item>
                    <vs-sidebar-item index="14" icon-pack icon="fa-fw fas fa-seedling" href="{{ route('semilleros.index') }}" class="{{ Request::is('panel/semilleros*') ? 'active' : '' }}">
                        &nbsp; Semilleros
                    </vs-sidebar-item>
                    <vs-sidebar-item index="15" icon-pack icon="fa-fw fas fa-users" href="{{ route('usuarios.index') }}" class="{{ Request::is('panel/usuarios*') ? 'active' : '' }}">
                        &nbsp; Usuarios
                    </vs-sidebar-item>

                </section>
            </vs-sidebar>
        @endauth

        <main class="pt-panel">
            @yield('content')
        </main>
    </div>
</body>
</html>

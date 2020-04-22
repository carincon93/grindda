@extends('layouts.app')

@push('header')
    <header class="header-pagina-principal" style="background: url({{ Storage::url($fondo->imagen) }}) center center/cover fixed no-repeat;">

        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 1 0.5">
            <defs>
                <clipPath id="myClip" clipPathUnits="objectBoundingBox" transform="scale(1, 1.8)">
                    <path d="M0,0v0.5c0.1,0,0.2,0,0.3,0c0.3,0,0.5-0.1,0.7-0.1V0H0z"/>
                </clipPath>
            </defs>
        </svg>
    </header>
    <section class="grindda-info">
        <div class="container mt-auto">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-gold">
                        <h1 class="text-center mb-0"><strong>GRIN</strong>DDA</h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <p class="text-center text-light">
                        El Grupo de Investigación en Diseño y Desarrollo Aplicado GRINDDA, gestiona conocimiento científico, tecnológico y de innovación en el Centro de Procesos Industriales y Construcción a nivel nacional e internacional fomentando el desarrollo productivo, humano y ecológico en las prácticas formativas, propendiendo la consolidación constante del SENA y el trabajo colaborativo con empresas del sector industrial y de la construcción, así como universidades del país.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endpush
@section('content')
    <section class="carousel m-250">
        <h1 class="text-center mb-5 animated"><i class="fas fa-thumbtack"></i> Destacado</h1>
        <div class="owl-carousel carousel-jumbotron">
            @foreach ($carouselItems as $key => $item)
                <div class="row">
                    <div class="col-md-3">
                        <div class="ml-4">
                            <div class="carousel-card">
                                @if ($item->tipo == 'evento')
                                    <h6 class="text-left" style="color: #43418e;"><strong>Evento</strong></h6>
                                    <h5 class="text-center"><i class="fa fa-calendar-alt fa-fw"></i><strong>Fechas del evento:</strong></h5>
                                    @if ($item->evento->fechaInicio != $item->evento->fechaFin)
                                        <p class="text-center fecha">
                                            {{ $item->evento->fechaInicio }}
                                        </p>
                                        <p class="text-center fecha">
                                            {{ $item->evento->fechaFin }}
                                        </p>
                                    @else
                                        <p class="text-center fecha">
                                            {{ $item->evento->fechaFin }}
                                        </p>
                                    @endif
                                    <h5 class="text-center"><i class="fas fa-map-marker-alt fa-fw"></i><strong>Lugar del evento:</strong></h5>
                                    <p class="text-center">
                                        {{ $item->evento->lugar }}
                                    </p>
                                    <a href="{{ route('paginas.eventos', str_slug($item->evento->clasificacion)) }}" class="border p-2 text-center d-block">Más información</a>
                                @elseif ($item->tipo == 'otro')
                                    <div class="position-relative">
                                        <a href="{{ $item->url }}">Ir a la página</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @if ($item->tipo == 'evento')
                            <img src="{{ Storage::url($item->evento->imagen) }}" alt="" class="img-fluid">
                            <div class="carousel-description">
                                <p class="text-justify block-with-text">
                                    {{ $item->evento->descripcion }}
                                </p>
                            </div>
                        @else
                            <img src="{{ Storage::url($item->imagen) }}" alt="" class="img-fluid">
                            <div class="carousel-description">
                                <p class="text-justify block-with-text">
                                    {{ $item->descripcion }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="m-250">
        <h3 class="text-center mb-5 animated">Grupo de investigación <strong>GRIN</strong>DDA</h3>
        <div class="owl-carousel carousel-investigadores">
            @foreach ($investigadores->where('dependencia', 'sennova') as $key => $investigador)
                <div class="card">
                    <header class="d-flex justify-content-center align-items-center">
                        <img src="{{ Storage::url($investigador->foto) }}" alt="" class="img-fluid rounded-circle foto-investigador">
                    </header>
                    <div>
                        <p class="text-center mt-4">{{ $investigador->nombre }}</p>
                        <h5 class="text-center"><strong>Profesión</strong></h5>
                        <p class="text-center">{{ $investigador->profesion }}</p>
                        {{-- @foreach ($investigador->roles as $key => $rol)
                            <p>{{ $rol->nombre }}</p>
                        @endforeach --}}
                    </div>
                    <div class="footer-card">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container">
            <a href="{{  route('quienes_somos.integrantes') }}" class="text-center d-block border p-2 w-50 m-auto">Ver todos los integrantes</a>
        </div>
    </section>
@endsection
|

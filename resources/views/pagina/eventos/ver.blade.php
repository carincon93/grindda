@extends('layouts.app')
@push('header')
    <header class="jumbotron jumbotron-eventos mt-header" style="background: #e9ecef url({{ Storage::url($evento->imagen) }}) center right/cover no-repeat;">
        <div class="container">
            <h1 class="text-left text-uppercase">
                {{ $evento->clasificacion }}
            </h1>
        </div>
    </header>
@endpush
@section('content')
    <div class="container py-4">
        <div class="card card-eventos-detalle">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ Storage::url($evento->miniatura) }}" alt="" class="img-fluid">
                    <div class="pt-5">
                        <h4 class="text-center"><i class="fas fa-link icono-enlace btn-circle"></i> Enlaces y archivos</h4>
                        <div class="p-4">
                            @foreach ($evento->archivos as $key => $item)
                                @if ($item->url)
                                    <a href="{{ $item->url }}" target="_blank" class="enlace-archivo">{{ $item->titulo }}</a>
                                @endif
                                @if ($item->archivo)
                                    <a href="{{ route('eventos.descargar_archivo', $item->id) }}" class="enlace-archivo"><i class="fas fa-file-download"></i> {{ $item->titulo }}</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="text-center p-2">
                        <span class="evento-fecha">
                            <i class="fas fa-calendar mr-3"></i>
                            {{ date('d', strtotime($evento->fechaInicio)) }}
                        </span>
                        <strong  class="substring ml-2">
                            {{ $evento->fechaInicio }}
                        </strong>

                        @if ($evento->fechaInicio != $evento->fechaFin)
                            <span class="mr-2 ml-2">al</span>

                            <span class="evento-fecha">
                                <i class="fas fa-calendar mr-3"></i>
                                {{ date('d', strtotime($evento->fechaFin)) }}
                            </span>
                            <strong  class="substring ml-2">
                                {{ $evento->fechaFin }}
                            </strong>
                        @endif

                    </p>
                    <p class="mb-0 ml-4 mt-4 text-muted">Información</p>
                    <p class="text-justify p-4 ">
                        {!! $evento->descripcion !!}
                    </p>
                    <article class="logros {{ str_word_count($evento->logros) > 330 ? 'mostrar-menos' : 'mostrar-mas' }}">
                        <p class="mb-0 ml-4 mt-4 text-muted">Logros</p>
                        <p class="text-justify p-4">
                            {!! $evento->logros !!}
                        </p>
                        <button type="button" class="btn btn-info w-50 d-block m-auto mt-2 show-more">Leer más</button>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@push('header')
    <header class="jumbotron jumbotron-eventos mt-header">
        <div class="container">
            <h1 class="text-left">
                <strong class="text-verde"><i class="far fa-calendar-alt"></i> Eve</strong>ntos
            </h1>
        </div>
    </header>
@endpush
@section('content')
    <div class="container py-4">
        @foreach ($eventos as $key => $evento)
            <div class="card card-eventos">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ Storage::url($evento->miniatura) }}" alt="" class="img-fluid">
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
                        <p class="block-with-text text-justify p-4 ">{{ $evento->descripcion }}</p>
                        <a href="{{ route('paginas.eventos', [$evento->ano, str_slug($evento->nombreEvento)]) }}" class="btn d-block ml-4 mr-4 border btn-mas-informacion">Ver información</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@extends('layouts.app')

@push('header')
    <header class="jumbotron jumbotron-publicaciones mt-header d-flex justify-content-center">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <h1>
                @if($tipo_publicacion == 'revista')
                @php $tipo_publicacion = 'revista' @endphp

                Revistas

                @elseif($tipo_publicacion == 'boletin')
                @php $tipo_publicacion = 'boletín' @endphp

                Boletines

                @elseif($tipo_publicacion == 'libro')
                @php $tipo_publicacion = 'libro' @endphp

                Libros

                @elseif($tipo_publicacion == 'articulo')
                @php $tipo_publicacion = 'artículo' @endphp

                Artículos

                @endif
            </h1>

    </header>
@endpush
@section('content')

    <div class="container">

        @include('partials.messages')

        <!--<p class="text-muted">-->
        <!--    Lista de las publicaciones del grupo de investigación GRINDDA.-->
        <!--</p>-->
        @forelse ($publicaciones as $key => $publicacion)
            <div class="card card-publicaciones">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ Storage::url($publicacion->portada) }}" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <h1 class="p-4 m-0"><strong>{{ $publicacion->nombre }}</strong></h1>
                        {{-- <p class="pl-4 pr-4 pb-2 m-0 text-muted"></p> --}}
                        <p class="pl-4 pr-4 pb-2 m-0 text-left block-with-text text-muted">
                            {{ $publicacion->descripcion }}
                            <br>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('publicaciones.descargar', $publicacion->id) }}" class="ml-4 mt-2 btn btn-publicaciones">Ver {{ $tipo_publicacion }}</a>
                            </div>
                    </div>
                </div>
            </div>
        @empty
            <p>
                No hay publicaciones aún.
            </p>
        @endforelse
    </div>
@endsection

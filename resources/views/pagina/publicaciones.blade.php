@extends('layouts.app')
<<<<<<< HEAD

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
=======
<header style="background: #dde2e2;height: 500px;">
    <div class="row">
        <div class="col" style="padding: 200px;">
            <h1 class="text-center text-white display-4">Publicaciones</h1>
            <div style="width: 25px;height: 25px;background:#f60;border-radius:50%;margin-left:300px"></div>
        </div>
    </div>
</header>
@section('content')

    <div class="container py-4">
        @forelse ($publicaciones as $publicacion)
            <div class="row" style="margin: 100px 0px;">
                <div class="col-4">
                    <img src="{{Storage::url($publicacion->portada)}}" width="100%">
                </div>
                <div class="col">
                    <h2>{{$publicacion->nombre}}</h2>
                    <p class="mt-5 text-muted">{{$publicacion->descripcion}}</p>
                    <a href="#" class="btn btn-primary" style="border:none;background: linear-gradient(to right, #f60, #f07e8a);">Ver revistas</a>
>>>>>>> santiago
                </div>
            </div>
        @empty
            <p>
                No hay publicaciones aún.
            </p>
        @endforelse
    </div>
@endsection

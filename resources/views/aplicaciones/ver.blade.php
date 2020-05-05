@extends('layouts.panel')

@section('content')
<div class="container mt-5 bg-white">
        <a href="{{route('aplicaciones.index')}}">
        <i class="fas fa-arrow-circle-left"></i>
        volver atrás
        </a>
        <div class="row blockquote text-center">
            <div class="col">
                <h1 class="display-3">{{$aplicacion->nombre}}</h1>
                <p class="mt-5">Mas información en:</p>
                <a href="{{ $aplicacion->url }}" class="display-5">{{ $aplicacion->url }}</a>
            </div>
        </div>
</div>
@endsection

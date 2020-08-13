@extends('layouts.app')
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
                </div>
            </div>
        @empty
            <p>
                No hay publicaciones aún.
            </p>
        @endforelse
    </div>
@endsection

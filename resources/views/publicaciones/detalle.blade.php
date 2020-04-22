@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <a href="{{route('publicaciones.index')}}">Volver</a>
                <div class="card">
                    <div class="card-header bg-success"></div>
                    <div class="card-title text-center p-2 h3">
                            {{$publicacion->nombre}}
                    </div>
                <img src="{{Storage::url($publicacion->portada)}}" class="card-img-top w-50 img-responsive mx-auto">
                <div class="card-body">
                    <p class="h4 text-center">
                        {{$publicacion->descripcion}}
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
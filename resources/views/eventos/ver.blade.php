@extends('layouts.panel')

@section('content')
<div class="container mt-5 bg-white">
        <a href="{{route('eventos.index')}}">
        <i class="fas fa-arrow-circle-left"></i>
        volver atrás
        </a>
        <div class="row">
            <div class="col m-5">
                <h1>{{$evento->nombreEvento}}</h1>
            <div class="">
                <img src="app/public/{{Storage::url($evento->miniatura)}}" alt="" class="img-fluid">
                <img src="{{Storage::url($evento->imagen)}}" alt="" class="img-fluid">
            </div>
            <div class="col-9">

                <p class="lead"> 
                    <strong> Año:  </strong> {{ $evento->ano }} <br>
                    <strong> Clasificación:  </strong> {{ $evento->clasificacion }} <br>
                    <strong> Desde:  </strong> {{ $evento->fechaInicio }} <br>
                    <strong> Hasta:  </strong> {{ $evento->fechaFin }} <br>
                    <strong> Lugar:  </strong> {{ $evento->lugar }} <br>
                    <strong> Estado de la publicación:  </strong> {{ $evento->estadoPublicacion }} <br>
                </p>
                
                <h2>Descripción</h2>
                <p class="pservices text-justify">
                    {{ $evento->descripcion }}
                </p>
                <hr>
                <h2>Logros</h2>
                <p class="pservices text-justify">
                    {{ $evento->logros }}
                </p>
            </div>
            </div>
            
        </div>

</div>
@endsection

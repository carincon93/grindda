@extends('layouts.panel')

@section('content')
<div class="container mt-5 bg-white">
        <a href="{{route('lineas_investigacion.index')}}">
        <i class="fas fa-arrow-circle-left"></i>
        volver atrás
        </a>
        <div class="row  mt-5">
            <div class="col-2"></div>
            <div class="col-8">

                <h1>{{$lineaInvestigacion->nombre}}</h1>
                <br>
                <h3>Descipción</h3>
                <p class="pservices text-justify">
                    {{ $lineaInvestigacion->descripcion }}
                </p>
                <br>
                <img src="{{Storage::url($lineaInvestigacion->imagen)}}" alt="" class="img-fluid">
                
            </div>
            <div class="col-2"></div>
        </div>
</div>
@endsection

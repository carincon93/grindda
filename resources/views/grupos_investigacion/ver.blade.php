@extends('layouts.panel')

@section('content')
<div class="container mt-5 bg-white">
        <a href="{{route('grupos_investigacion.index')}}">
        <i class="fas fa-arrow-circle-left"></i>
        volver atrás
        </a>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">

                <h1>{{$grupoInvestigacion->nombre}}</h1>
                <br>
                
                <img src="{{Storage::url($grupoInvestigacion->logo)}}" alt="">
                
                <br>
                <h3>Descipción</h3>
                <p class="pservices text-justify">
                    {{ $grupoInvestigacion->descripcion }}
                </p>
                <br>
                <h3>¿Qué hacemos?</h3>
                <p class="pservices text-justify">
                    {{ $grupoInvestigacion->que_hacemos }}
                </p>
                <h3>Objetivo</h3>
                <p class="pservices text-justify">
                    {{ $grupoInvestigacion->objetivo }}
                </p>
                <br>
                <h3>Misión</h3>
                <p class="pservices text-justify">
                    {{ $grupoInvestigacion->mision }}
                </p>
                <br>
                <h3>Visión</h3>
                <p class="pservices text-justify">
                    {{ $grupoInvestigacion->vision }}
                </p>
                <br>
            </div>
            <div class="col-2"></div>
        </div>
        </div>
        @endsection
        
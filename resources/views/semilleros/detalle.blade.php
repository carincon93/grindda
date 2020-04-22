@extends('layouts.panel')

@section('content')
<div class="container">
    <a href="{{ route('semilleros.index') }}">Volver</a>
        <div class="card">
            <div class="card-header bg-success">
            </div>
            <div class="card-body">
                <div class="row my-3">
                    <div class="col">
                        <h2 class="text-center">{{$semillero->nombre}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="{{Storage::url($semillero->imagen)}}" class="img-fluid">                            
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card p-3">
                            <div class="row">
                                <div class="col font-weight-bold">Tipo</div>
                                <div class="col">{{$semillero->tipoSemillero}}</div>
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="row">
                                <div class="col font-weight-bold">Fecha de creacion</div>
                                <div class="col">{{$semillero->fechaCreacion}}</div>
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="row">
                                <div class="col-12 font-weight-bold">Descripcion</div>
                            <div class="col">{{$semillero->descripcion}}</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card p-3">
                            <h3>Mision</h3>
                            <p>{{$semillero->mision}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card p-3">
                            <h3>Vision</h3>
                            <p>{{$semillero->vision}}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3">
                            <h3>Justificacion</h3>
                            <p>{{$semillero->justificacion}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card p-3">
                            <h3>Objetivo General</h3>
                            <p>{{$semillero->objetivoGeneral}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card p-3">
                            <h3>Objetivos Especificos</h3>
                            <p>{{$semillero->objetivosEspecificos}}</p>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                            <div class="card p-3">
                                <h3>Logros</h3>
                                <p>{{$semillero->logros}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
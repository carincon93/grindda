@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <img src="{{ Asset('images/sennova-logo.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="container mb-5">
        <h5 class="mb-4 text-underline text-muted">Integrantes</h5>
        @foreach($integrantes->where('dependencia', 'sennova')->whereIn('tipoVinculacion',['funcionario planta','instructor planta','funcionario contratista','instructor contratista'])->chunk(4) as $chunk)
            <div class="row mb-2">
                @foreach($chunk as $integrante)
                    <div class="col-md-3 col-sm-3">
                        <div class="card">
                            <div class="p-5 d-flex justify-content-center align-items-center">
                                <img src="{{ Storage::url($integrante->foto) }}" class="img-fluid rounded-circle foto-investigador">
                            </div>
                            <div class="card-body">
                                <p class="text-center">{{ $integrante->nombre }}</p>
                                <h5 class="text-center"><strong>Profesión</strong></h5>
                                <p class="text-center">{{ $integrante->profesion }}</p>
                            </div>
                            <a href="{{ $integrante->enlace_CvLac}}" class="d-block border p-2 text-center" target="_blank">Ver hoja de vida CvLAC</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    
    <div class="container mb-5">
        <h5 class="mb-4 text-underline text-muted">Aprendices</h5>
        @foreach($integrantes->where('dependencia', 'sennova')->whereIn('tipoVinculacion',['aprendiz practica','aprendiz lectiva'])->chunk(4) as $chunk)
            <div class="row mb-2">
                @foreach($chunk as $integrante)
                    <div class="col-md-3 col-sm-3">
                        <div class="card">
                            <div class="p-5 d-flex justify-content-center align-items-center">
                                <img src="{{ Storage::url($integrante->foto) }}" class="img-fluid rounded-circle foto-investigador">
                            </div>
                            <div class="card-body">
                                <p class="text-center">{{ $integrante->nombre }}</p>
                                <h5 class="text-center"><strong>Profesión</strong></h5>
                                <p class="text-center">{{ $integrante->profesion }}</p>
                            </div>
                            <a href="{{ $integrante->enlace_CvLac}}" class="d-block border p-2 text-center" target="_blank">Ver hoja de vida CvLAC</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="jumbotron mt-5">
        <div class="container">
            <img src="{{ Asset('images/tecnoparque-logo-gris.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="container mb-5">
        <h5 class="mb-4 text-underline text-muted">Integrantes</h5>
        @foreach($integrantes->where('dependencia', 'tecnoparque')->chunk(4) as $chunk)
            <div class="row mb-2">
                @foreach($chunk as $integrante)
                    <div class="col-md-3 col-sm-3">
                        <div class="card">
                            <div class="p-5 d-flex justify-content-center align-items-center">
                                <img src="{{ Storage::url($integrante->foto) }}" class="img-fluid rounded-circle foto-investigador">
                            </div>
                            <div class="card-body">
                                <p class="text-center">{{ $integrante->nombre }}</p>
                                <h5 class="text-center"><strong>Profesión</strong></h5>
                                <p class="text-center">{{ $integrante->profesion }}</p>
                            </div>
                            <a href="{{ $integrante->enlace_CvLac}}" class="d-block border p-2 text-center" target="_blank">Ver hoja de vida CvLAC</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection

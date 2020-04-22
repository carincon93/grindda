@extends('layouts.app')

@section('content')
    <header class="jumbotron jumbotron-informacion mt-header" style="background: #e9ecef no-repeat; background-position-y: 53%; background-position-x: 615px; background-size: 65%;">
        <div class="container">
            <h1 class="text-left">
                <strong class="text-verde"><i class="fas fa-info"></i> Infor</strong>mación general
            </h1>
        </div>
    </header>
    <div class="container">
        <div class="card py-4">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h1 class="text-center mt-5"><strong class="text-verde">GRIN</strong>DDA</h1>
                </div>
                <div class="col-md-8">
                    <h2 class="text-center mt-5"><strong class="text-verde">Grupo</strong> de investigación</h2>
                    <p class="text-justify p-5">{{ $grupoInvestigacion->descripcion }}</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <img src="{{ Storage::url('quienes_somos/objetivo.png') }}" alt="" class="img-fluid d-block m-auto" width="200px">
                </div>
                <div class="col-md-8">
                    <h2 class="text-center"><strong class="text-verde">Obj</strong>etivo</h2>
                    <p class="text-justify p-5">{{ $grupoInvestigacion->objetivo }}</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <img src="{{ Storage::url('quienes_somos/mision.png') }}" alt="" class="img-fluid d-block m-auto" width="200px">
                </div>
                <div class="col-md-8">
                    <h2 class="text-center"><strong class="text-verde">Re</strong>tos</h2>
                    <p class="text-justify p-5">{{ $grupoInvestigacion->mision }}</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <img src="{{ Storage::url('quienes_somos/vision.png') }}" alt="" class="img-fluid d-block m-auto" width="200px">
                </div>
                <div class="col-md-8">
                    <h2 class="text-center"><strong class="text-verde">Vis</strong>ión</h2>
                    <p class="text-justify p-5">{{ $grupoInvestigacion->vision }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
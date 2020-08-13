@extends('layouts.app')
<header style="background: #cde0e2;height:300px">
    <div class="container">
        <h1 class="text-left" style="padding: 130px">
            <strong class="text-white">Líneas de investigación</strong>
            <div style="width: 25px;height:25px;background: #f60;border-radius:50%;position: absolute;left:300px"></div>
        </h1>
    </div>
</header>
@section('content')
        @foreach($lineasInvestigacion->where('estado', 'activo') as $key => $lineaInvestigacion)
            <div class="mt-4 p-4 {{ $key % 2 == 0 ? 'linea-investigacion-odd' : 'linea-investigacion-even' }}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 p-2">
                            <img src="{{ Storage::url($lineaInvestigacion->imagen) }}" class="img-fluid" style="box-shadow: 0px 0px 1px dodgerblue">
                        </div>
                        <div class="col-md-7 ml-5">
                            <h3>{{ $lineaInvestigacion->nombre }}</h3>
                            <div class="text-justify">{!! $lineaInvestigacion->descripcion !!}</div>
                            <a href="{{route('quienes_somos.lineas_investigacion_detalle', $lineaInvestigacion->id)}}" class="btn btn-primary mt-3" style="border:none;background: linear-gradient(to right, #f60, #f07e8a)">Mas informacion</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
@endsection

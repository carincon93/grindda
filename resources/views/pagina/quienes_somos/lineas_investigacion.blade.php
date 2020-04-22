@extends('layouts.app')
@push('header')
    <header class="jumbotron jumbotron-lineas-investigacion mt-header">
        <div class="container">
            <h1 class="text-left">
                <strong class="text-verde"><i class="fas fa-code-branch fw"></i> Lín</strong>eas de investigación
            </h1>
        </div>
    </header>
@endpush
@section('content')
        @foreach($lineasInvestigacion->where('estado', 'activo') as $key => $lineaInvestigacion)
            <div class="mt-4 p-4 {{ $key % 2 == 0 ? 'linea-investigacion-odd' : 'linea-investigacion-even' }}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ Storage::url($lineaInvestigacion->imagen) }}" alt="" width="100%">
                        </div>
                        <div class="col-md-7">
                            <h3>{{ $lineaInvestigacion->nombre }}</h3>
                            <div class="text-justify">{!! $lineaInvestigacion->descripcion !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
@endsection

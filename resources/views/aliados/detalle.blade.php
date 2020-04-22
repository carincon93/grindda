@extends('layouts.panel')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
            <a href="{{route('aliados.index')}}">Volver</a>
            <h2 class="mt-4">{{$aliado->nombre}}</h2>
            <img src="{{ Storage::url($aliado->logo) }}" alt="img">
            </div>
        </div>
    </div>
@endsection
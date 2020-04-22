@extends('layouts.app')

@push('header')
    <header class="jumbotron jumbotron-semilleros mt-header">
        <div class="container">
            <h1 class="text-left"><span class="text-verde"><i class="fa-fw fas fa-seedling"></i></span> <strong class="text-verde">Sem</strong>illeros</h1>
        </div>
    </header>
@endpush
@section('content')
        <div class="">
            @foreach ($semilleros as $key => $semillero)
                <div class="row mr-0 ml-0 p-20 {{ $key % 2 != 0 ? 'semilleros-odd' : 'semilleros-even' }}">
                    <div class="col-md-4">
                            <img src="{{ Storage::url($semillero->imagen) }}" alt="" class="img-fluid d-block m-auto" width="280">
                    </div>
                    <div class="col-md-8 p-20">
                        <p class="text-justify"><strong>{{ $semillero->descripcion }}</strong></p>
                        <p class="text-justify">{{ $semillero->objetivoGeneral }}</p>
                        <a class="btn bg-gold" href="{{ route('semillero.detalle', str_slug($semillero->nombre, '-')) }}">Conocer más</a>
                    </div>
                </div>
            @endforeach
        </div>
@endsection

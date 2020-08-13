@extends('layouts.app')

@push('header')
    <header class="jumbotron jumbotron-semilleros mt-header">
        <div class="container">
            <h1 class="text-center"> Semilleros De Investigación</h1>
        </div>
    </header>
@endpush
@section('content')
<div class="inscripciones-semillero">
            <h2 class="text-center text-white m-5">Inscripciones abiertas a nuestros semilleros</h2>
</div>
<div class="list-semilleros">
    <div class="semillero-amarillo-cont">
        <div class="container semillero-container">
            <div class="row semillero-container">
                <div class="col-4">
                    <img src="{{Storage::url('semilleros/chica-amarillo.png')}}" class="chica" alt="">
                </div>
                <div class="col content-row-2">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-white text-right title-semillero-color">¿Quieres diseñar y construir <br>prototipos insdustriales?</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ Storage::url('semilleros/semillero-amarillo.png') }}" class="img-right" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn-right">Mas Información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="semillero-verde-cont">
        <div class="container semillero-container">
            <div class="row semillero-container">

                <div class="col content-row-2">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-white text-left title-semillero-color">¿Te interesa el desarrollo urbano<br>y paisajístico de la ciudad?</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ Storage::url('semilleros/semillero-verde.png') }}" class="img-left" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn-left">Mas Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <img src="{{Storage::url('semilleros/chica-verde.png')}}" class="chica" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="semillero-azul-cont">
        <div class="container semillero-container">
            <div class="row semillero-container">
                <div class="col-4">
                    <img src="{{Storage::url('semilleros/chico-azul.png')}}" class="chica" alt="">
                </div>
                <div class="col content-row-2">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-white text-right title-semillero-color">¿Deseas ser parte de la<br>transformación digital?</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ Storage::url('semilleros/semillero-azul.png') }}" class="img-right" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn-right">Mas Información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="semillero-naranja-cont">
        <div class="container semillero-container">
            <div class="row semillero-container">

                <div class="col content-row-2">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-white text-left title-semillero-color">¿Quieres aportar a la recuperación<br>de la cultura caldense?</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ Storage::url('semilleros/semillero-naranja.png') }}" class="img-left" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn-left">Mas Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <img src="{{Storage::url('semilleros/chica-naranja.png')}}" class="chica" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="semillero-rojo-cont">
        <div class="container semillero-container">
            <div class="row semillero-container">
                <div class="col-4">
                    <img src="{{Storage::url('semilleros/chica-rojo.png')}}" class="chica" alt="">
                </div>
                <div class="col content-row-2">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-white text-right title-semillero-color">¿Quires conocer nuevos<br>países?</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ Storage::url('semilleros/semillero-rojo.png') }}" class="img-right" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn-right">Mas Información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
        <!-- <div class="">
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
        </div> -->
@endsection

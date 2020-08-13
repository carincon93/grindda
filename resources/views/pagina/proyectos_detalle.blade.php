@extends('layouts.app')

<header style="background: url(/images/proyectosbg.png) no-repeat center;height: 500px;">
    <div id="bg" style="height: 500px;">
        <div class="row">
            <div class="col" style="padding: 200px;">
                <h1 class="text-center text-white display-5">{{$proyecto->nombre}}</h1>
            </div>
        </div>
    </div>
</header>

@section('content')
    <div class="container my-5">
        <div class="row" style="margin: 200px 0px;">
            <div class="col-5">
                <img src="{{Storage::url($proyecto->imagen)}}" class="img-fluid">
            </div>
            <div class="col">
                <h1 class="text-muted">INFORMACION</h1>
                <h5 class="text-muted">{{$proyecto->nombre}}</h5>
                <p class="mt-5">{{$proyecto->objetivoGeneral}}</p>
            </div>
        </div>
        <div class="row" style="margin-top: 200px;">
            <div class="col">
                <h1 class="text-muted display-4 text-center"><span style="border-bottom: 5px solid #f60">Eq</span>uipo de trabajo</h1>
            </div>
        </div>
        <div class="row mt-5" style="">
            <div class="col-4">
                <h4 class="text-primary">Cristian</h4>
                <p class="text-muted">Ingeniero en sistemas y telecomunicaciones</p>
            </div>
            <div class="col-4">
                <h4 class="text-primary">Santiago</h4>
                <p class="text-muted">Tecnologo en analisis y desarollo de sistemas de informacion</p>
            </div>
            <div class="col-4">
                <h4 class="text-primary">Sebastian</h4>
                <p class="text-muted">Tecnologo en analisis y desarollo de sistemas de informacion</p>
            </div>
            <div class="col-4">
                <h4 class="text-primary">Cristian</h4>
                <p class="text-muted">Ingeniero en sistemas y telecomunicaciones</p>
            </div>
            <div class="col-4">
                <h4 class="text-primary">Santiago</h4>
                <p class="text-muted">Tecnologo en analisis y desarollo de sistemas de informacion</p>
            </div>
            <div class="col-4">
                <h4 class="text-primary">Sebastian</h4>
                <p class="text-muted">Tecnologo en analisis y desarollo de sistemas de informacion</p>
            </div>
        </div>
        <div class="row" style="margin-top: 200px;">
            <div class="col">
                <h1 class="text-muted display-4 text-center"><span style="border-bottom: 5px solid #f60">Lin</span>ea de investigacion</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <img src="{{asset('images/azul.jpg')}}">
            </div>
        </div>
        <div class="row" style="margin-top: 200px;">
            <div class="col">
                <h1 class="text-muted display-4 text-center"><span style="border-bottom: 5px solid #f60">GA</span>LERIA</h1>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-theme owl-galeria-proyectos">
        <div class="item">
            <img src="{{asset('images/proyectos1.jpg')}}" style="height: 300px">
        </div>
        <div class="item">
            <img src="{{asset('images/proyectos2.jpg')}}" style="height: 300px">
        </div>
        <div class="item">
            <img src="{{asset('images/proyectos3.jpg')}}" style="height: 300px">
        </div>
        <div class="item">
            <img src="{{asset('images/proyectos2.jpg')}}" style="height: 300px">
        </div>
    </div>
    
@endsection

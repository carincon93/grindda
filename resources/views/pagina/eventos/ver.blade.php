@extends('layouts.app')
<header class="header-eventos">
    <div id="bg">
    <div class="owl-carousel owl-theme owl-eventos">
        <div class="item">
            <div class="row" style="margin: 0px 1px">
                <div class="col-8 text-left mx-auto text-white">
                    <h1 style="margin-top: 150px;font-size: 60px">{{$evento->nombreEvento}}<span style="color: #f60">.</span></h1>
                    <h3 class="my-3">Del {{date('j',strtotime($evento->fechaInicio))}} de {{date('F',strtotime($evento->fechaInicio))}} al {{date('j',strtotime($evento->fechaFin))}} de {{date('F',strtotime($evento->fechaFin))}}</h3>
                    <p>{{$evento->descripcion}}</p>
                </div>
                <div class="col-12 mx-auto text-white text-center p-4" style="margin-top: 160px;background: rgba(255, 102, 0, 0.548);height:100px">
                    <h1 class="d-inline">Inscripciones abiertas</h1>
                    <button class="btn btn-primary" style="border:none;background: linear-gradient(to right, #f60, #f07e8a);margin-left: 100px">Inscripcion</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-5">
                <img src="{{asset('images/headerEventos.jpg')}}" class="img-fluid" style="height: 500px;width: 100%;">
                <div style="width: 400px;height:200px;position: absolute;top:150px;left:-150px;background:url(/images/evento.jpg) no-repeat center">
                </div>
            </div>
            <div class="col">
                <h1 class="text-muted">Informacion de la feria</h1>
                <h3 class="my-3" style="color: #f60">Del {{date('j',strtotime($evento->fechaInicio))}} de {{date('F',strtotime($evento->fechaInicio))}} al {{date('j',strtotime($evento->fechaFin))}} de {{date('F',strtotime($evento->fechaFin))}}</h3>
                <p class="mt-5 text-muted">{{$evento->descripcion}}</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h1 class="text-center text-muted"><span style="border-bottom: 5px solid #f60">Enl</span>aces de interés</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div style="width: 25px;height:25px;border-radius:50%;background: #f60;position: absolute;left:200px;top:1700px"></div>
            <div class="col-4">
                <div class="card" style="border: 1px solid gray;border-radius:20px">
                    <div class="card-body mt-3">
                        <div style="width: 100px;height:70px;position:absolute;top:-3px;left:0px;background:url(/images/eve.png) no-repeat center"></div>
                        <p class="mt-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, eaque repudiandae id facere ab praesentium distinctio alias laboriosam cum sit nisi provident iste qui ea porro dignissimos natus et voluptates!
                        </p>
                        <button class="btn btn-primary mx-auto d-block" style="border:none;background: linear-gradient(to right, #f60, #f07e8a);">Inscripcion</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="border: 1px solid gray;border-radius:20px">
                    <div class="card-body mt-3">
                        <div style="width: 100px;height:70px;position:absolute;top:-3px;left:0px;background:url(/images/eve.png) no-repeat center"></div>
                        <p class="mt-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, eaque repudiandae id facere ab praesentium distinctio alias laboriosam cum sit nisi provident iste qui ea porro dignissimos natus et voluptates!
                        </p>
                        <button class="btn btn-primary mx-auto d-block" style="border:none;background: linear-gradient(to right, #f60, #f07e8a);">Inscripcion</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="border: 1px solid gray;border-radius:20px">
                    <div class="card-body mt-3">
                        <div style="width: 100px;height:70px;position:absolute;top:-3px;left:0px;background:url(/images/eve.png) no-repeat center"></div>
                        <p class="mt-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, eaque repudiandae id facere ab praesentium distinctio alias laboriosam cum sit nisi provident iste qui ea porro dignissimos natus et voluptates!
                        </p>
                        <button class="btn btn-primary mx-auto d-block" style="border:none;background: linear-gradient(to right, #f60, #f07e8a);">Inscripcion</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h1 class="text-center text-muted"><span style="border-bottom: 5px solid #f60;">Log</span>ros</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2">
                <div style="width: 181px;height: 179px;background: url(/images/trazaEve1.png) no-repeat center">
                    <div class="p-5" style="width: 181px;height: 179px;background: url(/images/trazaEve2.png) no-repeat center">
                        <span style="font-size: 50px" class="text-white text-center d-block">1</span>
                    </div>
                </div>
            </div>
            <div class="col ml-3 mt-5">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi veniam recusandae atque deserunt modi earum voluptatibus error doloribus alias molestias quisquam nam consequatur autem, veritatis est nulla sit optio culpa?</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2">
                <div style="width: 181px;height: 179px;background: url(/images/trazaEve1.png) no-repeat center">
                    <div class="p-5" style="width: 181px;height: 179px;background: url(/images/trazaEve2.png) no-repeat center">
                        <span style="font-size: 50px" class="text-white text-center d-block">2</span>
                    </div>
                </div>
            </div>
            <div class="col ml-3 mt-5">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi veniam recusandae atque deserunt modi earum voluptatibus error doloribus alias molestias quisquam nam consequatur autem, veritatis est nulla sit optio culpa?</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2">
                <div style="width: 181px;height: 179px;background: url(/images/trazaEve1.png) no-repeat center">
                    <div class="p-5" style="width: 181px;height: 179px;background: url(/images/trazaEve2.png) no-repeat center">
                        <span style="font-size: 50px" class="text-white text-center d-block">3</span>
                    </div>
                </div>
            </div>
            <div class="col ml-3 mt-5">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi veniam recusandae atque deserunt modi earum voluptatibus error doloribus alias molestias quisquam nam consequatur autem, veritatis est nulla sit optio culpa?</p>
            </div>
        </div>
        <div style="width: 25px;height:25px;border-radius:50%;background: #f60;position: absolute;right:200px;top:2450px"></div>
        <div class="row mt-5">
            <div class="col">
                <h1 class="text-center text-muted"><span style="border-bottom: 5px solid #f60;">Ga</span>leria</h1>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-theme owl-galeria-eventos">
        <div class="item">
            <img src="{{asset('images/evento1.jpg')}}" style="height: 300px">
        </div>
        <div class="item">
            <img src="{{asset('images/evento2.jpg')}}" style="height: 300px">
        </div>
        <div class="item">
            <img src="{{asset('images/evento3.jpg')}}" style="height: 300px">
        </div>
        <div class="item">
            <img src="{{asset('images/evento2.jpg')}}" style="height: 300px">
        </div>
    </div>
@endsection

@extends('layouts.app')
<header class="header-eventos">
    <div class="owl-carousel owl-theme owl-eventos">
        @foreach ($eventos as $evento)
        <div class="item">
            <div class="row" style="margin: 0px 1px">
                <div class="col-6 ml-auto text-left text-white" style="background: url(/images/rectEventos.png) no-repeat center;background-size:cover;height:700px">
                    <h1 style="margin-top: 150px;font-size: 60px">{{$evento->nombreEvento}}<span style="color: #f60">.</span></h1>
                    <h3 class="my-3">Del {{date('j',strtotime($evento->fechaInicio))}} de {{date('F',strtotime($evento->fechaInicio))}} al {{date('j',strtotime($evento->fechaFin))}} de {{date('F',strtotime($evento->fechaFin))}}</h3>
                    <p>{{$evento->descripcion}}</p>
                    <h1 class="my-5">Inscripciones abiertas</h1>
                    <button class="btn btn-primary" style="border:none;background: linear-gradient(to right, #f60, #f07e8a)">Inscripcion</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</header>
@section('content')
    <div class="row mt-5 mx-5">
        <div class="col">
            <h1 class="text-center text-muted"><span style="border-bottom: 5px solid #f60">Eve</span>ntos anteriores</h1>
        </div>
    </div>
    @foreach ($eventos as $evento)
    <div class="row mt-5 mx-5">
        <div style="width: 30px;height:30px;background: #f60;position:absolute;right:100px;border-radius:50%"></div>
        <div style="width: 20px;height:20px;background: #f60;position:absolute;right:300px;border-radius:50%;top:1350px"></div>
        <div class="col-4 p-3" style="border: 1px solid #f60;">
            <img src="{{Storage::url($evento->miniatura)}}">
        </div>
        <div class="col ml-5">
            <h1 class="w-75">{{$evento->nombreEvento}}</h1>
            <p class="mt-5 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad deserunt laudantium debitis hic natus, nam dolore perspiciatis vitae assumenda ullam minima fuga sit dignissimos expedita omnis quos quasi iusto iste quaerat quia inventore culpa. Vero dolores facilis accusamus, officiis quos ex cum similique illo. Deserunt vel minima, accusantium cupiditate temporibus ab corporis molestias est tempora ipsum, voluptates eaque quisquam, rerum numquam vitae! A totam quos itaque soluta! Ad aspernatur, delectus necessitatibus nulla ipsam exercitationem! Nemo porro iste explicabo, quis sit quod laudantium placeat doloremque saepe, voluptatum repellendus fugiat aut iusto! Repellendus fugiat reiciendis perferendis incidunt ad ipsam rem animi sequi.</p>
            <p class="mt-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad deserunt laudantium debitis hic natus, nam dolore perspiciatis vitae assumenda ullam minima fuga sit dignissimos expedita omnis quos quasi iusto iste quaerat quia inventore culpa. Vero dolores facilis accusamus, officiis quos ex cum similique illo. Deserunt vel minima, accusantium cupiditate temporibus ab corporis molestias est tempora ipsum, voluptates eaque quisquam, rerum numquam vitae! A totam quos itaque soluta! Ad aspernatur, delectus necessitatibus nulla ipsam exercitationem! Nemo porro iste explicabo, quis sit quod laudantium placeat doloremque saepe, voluptatum repellendus fugiat aut iusto! Repellendus fugiat reiciendis perferendis incidunt ad ipsam rem animi sequi.</p>
            <a href="{{route('paginas.eventos', ['ano'=>$evento->ano, 'nombreEvento'=>$evento->nombreEvento])}}" class="btn btn-primary mx-auto" style="background: linear-gradient(to right, #f60, #f07e8a);border:none">Detalle del evento</a>
        </div>
    </div>
    @endforeach
    <div style="width: 100%;height:250px;background: url(/images/trazaEve.png) no-repeat bottom"></div>
@endsection


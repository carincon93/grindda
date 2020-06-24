@extends('layouts.app')
<header style="background: url(/images/lineabg.jpg) no-repeat center;height:385px;background-size:cover">
    <div style="background: url(/images/trazaLinea.png) no-repeat center">
        <div class="container">
            <h1 class="text-center" style="padding: 150px">
                <strong class="text-white">{!! $lineaInvestigacion->nombre !!}</strong>
            </h1>
        </div>
    </div>
</header>
@section('content')
    <div class="mt-4 p-4">
        <div class="container">
            <div class="row" style="margin-top: 100px">
                <div class="col-md-3 p-2">
                    <img src="{{ Storage::url($lineaInvestigacion->imagen) }}" class="img-fluid" style="box-shadow: 0px 0px 1px dodgerblue">
                </div>
                <div class="col-md-7 ml-5 mt-5 text-muted">
                    <div class="text-justify">{!! $lineaInvestigacion->descripcion !!}</div>
                </div>
            </div>
            <div class="row" style="margin-top: 200px">
                <div class="col">
                    <h1 class="text-center text-muted"><span style="border-bottom: 5px solid #f60">Lid</span>er de la investigacion</h1>
                </div>
            </div>
            <div class="row mt-5 w-75 mx-auto" >
                <div class="col-4 text-right">
                    <h1 class="name display-4 ml-auto" style="color: #5596f7">Hades</h1>
                </div>
                <div class="col-4 text-center mx-auto">
                    <img class="img-team" src="/images/home/hades.png">
                </div>
                <div class="col-4 text-center mx-auto">
                    <h1 class="lastname display-4" style="margin-top: 100px; color: #5596f7;">Salazar</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto mt-3">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum tenetur amet placeat consequatur magnam sit esse nemo delectus dolor neque cupiditate corporis animi exercitationem, qui dolores, minus aut repellendus sint?</p>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary" style="border:none;background: linear-gradient(to right, #f60, #f07e8a)">Ver Cvlac</a>
                </div>
            </div>
            <div class="row" style="margin-top: 200px">
                <div class="col">
                    <h1 class="text-center text-muted"><span style="border-bottom: 5px solid #f60">Se</span>milleros asociados</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6 mx-auto text-center">
                    <img src="{{asset('images/azul.png')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary" style="border:none;background: linear-gradient(to right, #f60, #f07e8a)">Mas informacion</a>
                </div>
            </div>
            <div class="row" style="margin-top: 200px">
                <div class="col">
                    <h1 class="text-center text-muted"><span style="border-bottom: 5px solid #f60">Pro</span>yectos</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="owl-carousel owl-theme owl-proyectos">
                        <div class="item">
                            <div style="width: 100%;height:400px;background:url(/images/proyecto1.jpg) no-repeat center;background-size:cover">
                                <div id="bg">
                                    <h5 class="text-white" style="position: absolute;left:50%;transform:translate(-50%);top:150px">Realidad virtual</h5>
                                    <a href="#" class="btn btn-primary" style="margin-left:90px;border:none;background: linear-gradient(to right, #acc8fa, #609cf7);position: absolute;bottom:20px">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div style="width: 100%;height:400px;background:url(/images/proyecto2.jpg) no-repeat center;background-size:cover">
                                <div id="bg">
                                    <h5 class="text-white" style="position: absolute;left:50%;transform:translate(-50%);top:150px">Realidad aumentada</h5>
                                    <a href="#" class="btn btn-primary" style="margin-left:90px;border:none;background: linear-gradient(to right, #acc8fa, #609cf7);position: absolute;bottom:20px">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div style="width: 100%;height:400px;background:url(/images/proyecto1.jpg) no-repeat center;background-size:cover">
                                <div id="bg">
                                    <h5 class="text-white" style="position: absolute;left:50%;transform:translate(-50%);top:150px">Realidad aumentada</h5>
                                    <a href="#" class="btn btn-primary" style="margin-left:90px;border:none;background: linear-gradient(to right, #acc8fa, #609cf7);position: absolute;bottom:20px">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div style="width: 100%;height:400px;background:url(/images/proyecto3.jpg) no-repeat center;background-size:cover">
                                <div id="bg">
                                    <h5 class="text-white" style="position: absolute;left:50%;transform:translate(-50%);top:150px">Big Data</h5>
                                    <a href="#" class="btn btn-primary" style="margin-left:90px;border:none;background: linear-gradient(to right, #acc8fa, #609cf7);position: absolute;bottom:20px">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

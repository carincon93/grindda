@extends('layouts.app')

@section('content')
<header class="h-app">
    <div class="owl-carousel owl-header owl-theme">
        <div class="item item-header" style="background: url(/images/bg1.jpg);background-size: cover;"></div>
    </div>
    <div class="bg"
        style="position:absolute;top:0px;z-index:2;background:rgba(0, 0, 0, 0.4);width:100%;text-align:center;height:710px">
        <strong style="margin-top: 200px;color:white;font-size:70px;display:block">GRINDDA</strong>
        <p class="w-50 mx-auto text-white text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, cum
            quos repudiandae, molestiae id debitis eius at ex consequatur minima eveniet tempore quas laborum. Eos
            necessitatibus consectetur perferendis voluptas, non, cum illum itaque animi natus similique molestias
            beatae possimus iusto!</p>
    </div>
    <div class="bg"
        style="position:absolute;top:610px;z-index:3;background:linear-gradient(#fb538ea1 31%, #ff9b58);width:100%;text-align:center;height:100px">
        <div class="d-block mt-4">
            <h2 class="text-white d-inline">Inscripciones abiertas a nuestros semilleros</h2>
            <button class="btn ml-3" style="background: white; color:#f95232">Mas información</button>
        </div>
    </div>
</header>

<section id="about-us">
    <div class="row w-75 mx-auto">
        <div class="col-4 p-2" style="border: 1px solid #f95232">
            <img src="{{ asset('images/bg5.jpg') }}" class="img-fluid">
            <img src="{{ asset('images/bg6.jpg') }}" style="position: absolute;left: -100px;height: 150px;top:50px">
            <img src="{{ asset('images/bg7.jpg') }}" style="position: absolute;left: -100px;height: 150px;top:250px">
        </div>
        <div class="col">
            <h2 style="color: #f95232">Sobre nosotros</h2>
            <h1 class="text-muted">GRUPO DE INVESTIGACIÓN<br>GRINDDA</h1>
            <p class="mt-3 text-muted w-75">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nostrum animi ipsam et necessitatibus
                sapiente officia molestias eum delectus, quos expedita porro veniam quas corporis itaque, incidunt fugit
                excepturi aut?
            </p>
            <h5 style="color: #f95232"><i class="far fa-dot-circle"></i> Nuestros objetivos</h5>
            <p class="mt-3 text-muted w-75">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nostrum animi ipsam et necessitatibus
                sapiente officia molestias eum delectus, quos expedita porro veniam quas corporis itaque, incidunt fugit
                excepturi aut?
            </p>
        </div>
    </div>
</section>

<section id="our-team">
    <div class="container">

        <h1 class="text-center display-3 home-title"><span style="border-bottom: 5px solid #f95232">Nu</span>estro
            equipo</h1>

        <div class="owl-carousel owl-equipo owl-theme mt-5">
            <div class="item">
                <div class="row">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <h1 class="name display-4">Hades</h1>
                            <img class="img-team" src="/images/home/hades.png">
                            <h1 class="lastname display-4">Salazar</h1>
                        </div>
                        <p class="w-50 m-auto text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                            facere natus voluptates. Neque dolore facilis perspiciatis ut, quam, a iure laudantium et
                            vel modi sequi impedit ducimus, minima labore excepturi.</p>
                    </div>
                    <button class="btn btn-primary mt-3 mx-auto btn-contact">Ver perfil</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="our-team">
    <h1 class="text-center display-3 home-title"><span style="border-bottom: 5px solid #f95232">No</span>ticias</h1>
    <div class="row mt-5 mx-1">
        <div class="col-3">
            <div class="row">
                <div class="col-12" style="background: url(images/bg8.jpg) no-repeat center;width: 475px;height: 215px;background-size:cover">
                    <h3 class="w-50 mx-auto text-warning" style="margin-top: 80px;z-index:3">Equipo de<br>trabajo</h3>
                </div>
                <div class="col-12" style="background: url(images/bg9.jpg) no-repeat top;width: 475px;height: 215px;background-size:cover">
                    <h3 class="w-50 mx-auto text-warning" style="margin-top: 80px">Equipo de<br>trabajo</h3>
                </div>
            </div>
        </div>
        <div class="col p-0">
            <div class="owl-carousel owl-news owl-theme">
                <div class="item">
                    <div style="background: url(images/bg10.jpg) no-repeat top; width:100%;height: 430px;background-size: cover;">
                        <div style="position: absolute;left: 50%;transform: translate(-50%);margin-top: 130px;">
                            <h2 class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                            <p class="mt-3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, corporis autem mollitia vero ipsum aut fugiat similique, eaque quam tempore delectus assumenda dolor ratione molestias consectetur maiores, repudiandae suscipit in!</p>
                            <button style="background: linear-gradient(to right, #ff6b09 32%, #ff8fe2);border:none" class="btn btn-sm btn-primary">Ver noticia</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div style="background: url(images/bg9.jpg) no-repeat top; width:100%;height: 430px;background-size: cover;">
                        <div style="position: absolute;left: 50%;transform: translate(-50%);margin-top: 130px;">
                            <h2 class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                            <p class="mt-3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, corporis autem mollitia vero ipsum aut fugiat similique, eaque quam tempore delectus assumenda dolor ratione molestias consectetur maiores, repudiandae suscipit in!</p>
                            <button style="background: linear-gradient(to right, #ff6b09 32%, #ff8fe2);border:none" class="btn btn-sm btn-primary">Ver noticia</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background: url(images/bg11.png) no-repeat bottom;background-size:cover;height: 580px;">
    <div class="container" >
        <div class="row">
            <div class="col">
                <h1 class="text-center text-muted" style="font-size: 50px;margin-top:100px"><span style="border-bottom: 5px solid #f95232">Nu</span>estros semilleros de investigación</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="owl-carousel owl-semilleros owl-theme">
                    <div class="item">
                        <img src="{{asset('images/ver.png')}}" style="width: 50px">
                        <img src="{{asset('images/verde.png')}}" style="position: absolute;width: 150px;top:100px">
                        <img src="{{asset('images/semiVerde.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/azu.png')}}" style="width: 50px">
                        <img src="{{asset('images/azul.png')}}" style="position: absolute;width: 150px;top:100px">
                        <img src="{{asset('images/semiAzul.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/ver.png')}}" style="width: 50px">
                        <img src="{{asset('images/verde.png')}}" style="position: absolute;width: 150px;top:100px">
                        <img src="{{asset('images/semiVerde.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/ama.png')}}" style="width: 50px">
                        <img src="{{asset('images/amarillo.png')}}" style="position: absolute;width: 150px;top:100px">
                        <img src="{{asset('images/semiAma.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-app">
    <div class="container">
        <div class="row align-content-center">
            <div class="col-7">
                <div class="img1"></div>
                <div class="img2"></div>
            </div>
            <div class="col-5">
                <h1 class="display-3">PROYECTOS</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit rerum nostrum dignissimos corporis
                    fugiat pariatur?</p>
                <button class="btn btn-primary d-block ml-auto mt-5 btn-proy">Ver más</button>
            </div>
        </div>
    </div>
</section>
@endsection
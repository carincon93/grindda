@extends('layouts.app')

@section('content')
<header class="h-app">
    <div class="owl-carousel owl-header owl-theme">
        <div class="item item-header" style="background: url(/images/bg1.jpg);background-size: cover;">
            <svg class="curve curve-back" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1416.99 174.01">
                <path d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0 -135.53)"></path>
            </svg>
            <svg class="curve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1416.99 174.01">
                <path d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0 -135.53)"></path>
            </svg>
        </div>
    </div>
</header>

<section id="our-team">
    <div class="container">

        <h1 class="text-center display-3 home-title"><span style="border-bottom: 5px solid #f95232">Nu</span>estro equipo</h1>

        <div class="owl-carousel owl-equipo owl-theme mt-5">
            <div class="item">
                <div class="row">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <h1 class="name display-4">Hades</h1>
                            <img class="img-team" src="/images/home/hades.png">
                            <h1 class="lastname display-4">Salazar</h1>
                        </div>
                        <p class="w-50 m-auto text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure facere natus voluptates. Neque dolore facilis perspiciatis ut, quam, a iure laudantium et vel modi sequi impedit ducimus, minima labore excepturi.</p>
                    </div>
                    <button class="btn btn-primary mt-3 mx-auto btn-contact">Ver perfil</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="research-seedbeds">
    <div class="container">

        <h1 class="home-title display-1" style="font-size: 94px;">Semilleros <br><span style="font-size: 68px; top: -29px; position: relative;">de investigación</span></h1>

        <div class="aviso">
            <h1 class="text-white">¡Inscripciones abiertas!</h1>
            <a class="btn btn-register-seedbed">Quiero registrarme</a>
        </div>

        <div class="row row-linea">
            <div class="col-8 ml-auto">
                <div class="row">
                    <div class="col-1">
                        <div class="circle azul"></div>
                    </div>
                    <div class="col">
                        <img src="/images/home/semiAzu.png">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem iure fugiat harum optio facere ex. Veritatis, perferendis recusandae, asperiores, est optio accusamus maxime veniam hic qui delectus illo iste?</p>
                        <button class="btn btn-primary d-block ml-auto btn-contact">Ver semillero</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-linea">
            <div class="col-8">
                <div class="row">
                    <div class="col-1">
                        <div class="circle amarillo"></div>
                    </div>
                    <div class="col">
                        <img src="/images/home/semiAma.png">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem iure fugiat harum optio facere ex. Veritatis, perferendis recusandae, asperiores, est optio accusamus maxime veniam hic qui delectus illo iste?</p>
                        <button class="btn btn-primary d-block ml-auto btn-contact">Ver semillero</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-linea">
            <div class="col-8 ml-auto">
                <div class="row">
                    <div class="col-1">
                        <div class="circle verde"></div>
                    </div>
                    <div class="col">
                        <img src="/images/home/semiVer.png">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem iure fugiat harum optio facere ex. Veritatis, perferendis recusandae, asperiores, est optio accusamus maxime veniam hic qui delectus illo iste?</p>
                        <button class="btn btn-primary d-block ml-auto btn-contact">Ver semillero</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-linea">
            <div class="col-8">
                <div class="row">
                    <div class="col-1">
                        <div class="circle naranja"></div>
                    </div>
                    <div class="col">
                        <img src="/images/home/semiNar.png">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem iure fugiat harum optio facere ex. Veritatis, perferendis recusandae, asperiores, est optio accusamus maxime veniam hic qui delectus illo iste?</p>
                        <button class="btn btn-primary d-block ml-auto btn-contact">Ver semillero</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-linea">
            <div class="col-8 ml-auto">
                <div class="row">
                    <div class="col-1">
                        <div class="circle rojo"></div>
                    </div>
                    <div class="col">
                        <img src="/images/home/semiRed.png">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem iure fugiat harum optio facere ex. Veritatis, perferendis recusandae, asperiores, est optio accusamus maxime veniam hic qui delectus illo iste?</p>
                        <button class="btn btn-primary d-block ml-auto btn-contact">Ver semillero</button>
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
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit rerum nostrum dignissimos corporis fugiat pariatur?</p>
                <button class="btn btn-primary d-block ml-auto mt-5 btn-proy">Ver más</button>
            </div>
        </div>
    </div>
</section>
@endsection

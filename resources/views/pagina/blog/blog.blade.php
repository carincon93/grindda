@extends('layouts.app')
@push('header')
    <header class="jumbotron jumbotron-publicaciones mt-header ">
        <h1 class="d-flex justify-content-center">Blog</h1>
    <div class="header-blog row container d-flex justify-content-center">
            <div class="col-6 border m-2 portada1">
                <div class="title">
                    <h1 class="text-white">ARTÍCULOS GRINDDA</h1>
                </div>
                <div class="text">
                    <p class="text-align-justify">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Eius officia facilis asperiores exercitationem, provident 
                        a accusamus non quidem eaque nesciunt doloremque consectetur 
                        cum minus quo inventore, tempore animi. Saepe, perspiciatis.
                        a accusamus non quidem eaque nesciunt doloremque consectetur 
                        cum minus quo inventore, tempore animi. Saepe, perspiciatis.
                    </p>
                </div>
            </div>
            <div class="col-4 m-2 border">
                <div class="row">
                    <div class="col border">
                        <div class="title">
                            REGRESO A CLASES
                        </div>
                        <div class="text">
                            <p>
                            a accusamus non quidem eaque nesciunt doloremque consectetur 
                        cum minus quo inventore, tempore animi. Saepe, perspiciatis.
              
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col border">
                        <div class="title">
                            COVID
                        </div>
                        <div class="text">
                            <p>
                            a accusamus non quidem eaque nesciunt doloremque consectetur 
                        cum minus quo inventore, tempore animi. Saepe, perspiciatis.
                  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endpush
@section('content')
    <section class="container">
        <div class="row noticia-blog">
            <div class="col-4">
                <div class="">
                    <img src="{{Storage::url('/blog/recursos_blog/vis.jpg')}}" class="img-blog" alt="">
                </div>
            </div>
            <div class="col-8">
                <h1>CONVOCATORIA DE PROYECTOS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, omnis. Mollitia, magni dolor. Dolorem quas expedita eius doloribus nulla accusantium, excepturi eos architecto! Obcaecati adipisci pariatur porro sint facere laudantium?</p>
                <a href="" class="btn">Detalles Noticia</a>
            </div>
        </div>

        <div class="row noticia-blog">
            <div class="col-4">
                <div class="">
                    <img src="{{Storage::url('/blog/recursos_blog/vis.jpg')}}" class="img-blog" alt="">
                </div>
            </div>
            <div class="col-8">
                <h1>CONVOCATORIA DE PROYECTOS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, omnis. Mollitia, magni dolor. Dolorem quas expedita eius doloribus nulla accusantium, excepturi eos architecto! Obcaecati adipisci pariatur porro sint facere laudantium?</p>
                <a href="" class="btn">Detalles Noticia</a>
            </div>
        </div>
    </section>
@endsection
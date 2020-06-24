@extends('layouts.app')
<div class="semillero-bg-header">
    <div class="row semillero-container container">
        <div class="col-4">
            <img src="{{Storage::url('semilleros/chica-amarillo.png')}}" class="chica" alt="">
        </div>
        <div class="col mt-5">
            <h1 class="text-white text-right title-semillero-color">¿Quieres diseñar y construir <br>prototipos insdustriales?</h1>
        </div>
    </div>
    <div class="inscripciones-semillero-detalle">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-left text-white m-5">Inscripciones abiertas</h2>
                </div>
                <div class="col-2">
                    <button class="btn btn-semillero">Inscripcion</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container align-self-center semillero mx-auto">
<section class="fondo-cuadros">
        <div class="row">
            <div class="col">
                <div class="join-images">
                    <img src="{{Storage::url('semilleros/group.jpg')}}" class="img-group-semillero2" alt="">
                    <img src="{{Storage::url('semilleros/group2.jpg')}}" class="img-group-semillero1" alt="">
                    <img src="{{Storage::url('semilleros/rectangulo.png')}}" class="rectangle-img" alt="">
                </div>
            </div>
            <div class="col">
                <div class="logo-text">
                    <div class="logo-semillero"></div>
                    <p class="descripcion mx-auto">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quam, ab corporis Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Dolorem vitae molestiae nisi amet. Debitis
                        nobis labore sapiente ea corporis quis suscipit fugiat quo,
                        sunt, ut reprehenderit ab est eveniet atque. aspernatur
                        reprehenderit obcaecati earum possimus, animi temporibus
                        assumenda rem ex, quisquam dolore maxime non autem ducimus.
                        Vel, enim alias!
                    </p>
                </div>
            </div>
        </div>
        
    </section>
    <section>
        <div class="row">
            <div class="col-4 username-team">
                <h1>Aparicio</h1>
            </div>
            <div class="col-4">
                <img class="img-team" src="/images/Enmascarar_grupo_9.png" alt="">
            </div>
            <div class="col-4 lastname-team">
                <h1>Jaramillo</h1>
            </div>
        </div>
        <div class="row">
            <p class="descripcion mx-auto mt-5">Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Iusto ratione placeat,
                similique cupiditate ex eaque soluta tempora ad ipsam
                aliquam optio fugiat facilis aspernatur corrupti
                suscipit aperiam sit voluptatum iure.
            </p>
        </div>
        <a href="" class="btn btn-semillero">VerCvLac</a>
        <div class="group-team align-self-center mx-auot">
            <div class="row d-flex justify-content-center">
                    <h1 class=""> Aprendices </h1>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <h4>Cristian Camilo Vazques</h4>
                    <p>Ingeniero de Sistemas <br> y Telecominicaciones</p>
                </div>
                <div class="col">
                    <h4>Sebastian Corrales</h4>
                    <p>Tecnologo en analisis y desarrollo <br>de sistemas de información</p>
                </div>     
                <div class="col">
                    <h4>Santiago Bedoya</h4>
                    <p>Tecnologo en analisis y desarrollo <br>de sistemas de información</p>
                </div>     
            </div>

            <div class="row">
                <div class="col">
                    <h4>Cristian Camilo Vazques</h4>
                    <p>Ingeniero de Sistemas <br> y Telecominicaciones</p>
                </div>
                <div class="col">
                    <h4>Sebastian Corrales</h4>
                    <p>Tecnologo en analisis y desarrollo <br>de sistemas de información</p>
                </div>     
                <div class="col">
                    <h4>Santiago Bedoya</h4>
                    <p>Tecnologo en analisis y desarrollo <br>de sistemas de información</p>
                </div>     
            </div>
            <!-- Desc -->


        </div>
    </section>

    <section>
        <div class="talleres">
            <h1 class="title-taller mx-auto">
                Talleres
            </h1>
        </div>
        <div class="row">
        <div class="col-3 taller">
                    <img src="{{Storage::url('semilleros/esquinaTaller.png')}}" class="img-esquina" alt="">
                <div class="imgs-taller-post">
                    <div class="taller-post">
                        <div class="img-calendar">            
                        </div>
                    </div>
                </div>
                <div class="taller-decription  m-1 mt-5">
                    <h1 class=" text-center title title-taller-desc">7 de Julio</h1>
                    <p class="descripcion-taller">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nostrum
                        sint illum voluptates, laudantium veniam omnis aspernatur eaque porro earum, harum nemo hic!
                    </p>
                </div>
            </div>
            <div class="col-3 taller">
                    <img src="{{Storage::url('semilleros/esquinaTaller.png')}}" class="img-esquina" alt="">
                <div class="imgs-taller-post">
                    <div class="taller-post">
                        <div class="img-calendar">            
                        </div>
                    </div>
                </div>
                <div class="taller-decription  m-1 mt-5">
                    <h1 class=" text-center title title-taller-desc">7 de Julio</h1>
                    <p class="descripcion-taller">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nostrum
                        sint illum voluptates, laudantium veniam omnis aspernatur eaque porro earum, harum nemo hic!
                    </p>
                </div>
            </div>
            <div class="col-3 taller">
                    <img src="{{Storage::url('semilleros/esquinaTaller.png')}}" class="img-esquina" alt="">
                <div class="imgs-taller-post">
                    <div class="taller-post">
                        <div class="img-calendar">            
                        </div>
                    </div>
                </div>
                <div class="taller-decription  m-1 mt-5">
                    <h1 class=" text-center title title-taller-desc">7 de Julio</h1>
                    <p class="descripcion-taller">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nostrum
                        sint illum voluptates, laudantium veniam omnis aspernatur eaque porro earum, harum nemo hic!
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-3 taller">
                    <img src="{{Storage::url('semilleros/esquinaTaller.png')}}" class="img-esquina" alt="">
                <div class="imgs-taller-post">
                    <div class="taller-post">
                        <div class="img-calendar">            
                        </div>
                    </div>
                </div>
                <div class="taller-decription  m-1 mt-5">
                    <h1 class=" text-center title title-taller-desc">7 de Julio</h1>
                    <p class="descripcion-taller">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nostrum
                        sint illum voluptates, laudantium veniam omnis aspernatur eaque porro earum, harum nemo hic!
                    </p>
                </div>
            </div>
            <div class="col-3 taller">
                    <img src="{{Storage::url('semilleros/esquinaTaller.png')}}" class="img-esquina" alt="">
                <div class="imgs-taller-post">
                    <div class="taller-post">
                        <div class="img-calendar">            
                        </div>
                    </div>
                </div>
                <div class="taller-decription  m-1 mt-5">
                    <h1 class=" text-center title title-taller-desc">7 de Julio</h1>
                    <p class="descripcion-taller">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nostrum
                        sint illum voluptates, laudantium veniam omnis aspernatur eaque porro earum, harum nemo hic!
                    </p>
                </div>
            </div>
            <div class="col-3 taller">
                    <img src="{{Storage::url('semilleros/esquinaTaller.png')}}" class="img-esquina" alt="">
                <div class="imgs-taller-post">
                    <div class="taller-post">
                        <div class="img-calendar">            
                        </div>
                    </div>
                </div>
                <div class="taller-decription  m-1 mt-5">
                    <h1 class=" text-center title title-taller-desc">7 de Julio</h1>
                    <p class="descripcion-taller">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nostrum
                        sint illum voluptates, laudantium veniam omnis aspernatur eaque porro earum, harum nemo hic!
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Trazados -->
</div>
<h1 class="text-center title-taller">Galeria</h1>
    <img src="{{Storage::url('semilleros/rectangulo.png')}}" class="rectaungulo-gallery border" alt="">
<section class="gallery">
    <div class="row">
        <div class="col border">
            <img src="{{Storage::url('semilleros/gallery1.jpg')}}" alt="">
   
           <img src="{{Storage::url('semilleros/gallery2.jpg')}}" alt="">
  
            <img src="{{Storage::url('semilleros/gallery3.jpg')}}" alt="">
        </div>
    </div>
</section>
<div class="first-line">

        </div>
        <div class="second-line">

            <div class="third-line-green">
                
            </div>
        </div>
        <div class="sombra">
            
        </div>

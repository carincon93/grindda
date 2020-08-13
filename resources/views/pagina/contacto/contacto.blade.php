@extends('layouts.app')

@push('header')
<header class="jumbotron jumbotron-publicaciones mt-header d-flex justify-content-center">
    <h1>
        Contactenos
    </h1>
</header>
@endpush
@section('content')
<div class="container">
    <div class="img-location">
        <img src="{{ Storage::url('contacto/location.jpg') }}" class="img-fluid" alt="">
    </div>
</div>
<div class="contacto d-flex justify-content-center">
    <div class="form-contacto col-sm-12 col-lg-4 col-xl-4 p-5 bg-white">
        <div class="row d-flex justify-content-center">
            <div class="cold-flex justify-content-center">
                <img src="{{ Storage::url('contacto/logoGrindda.png') }}" alt="">

            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col">


                <div class="form-row ">
                    <div class="col my-2">
                        <label for="nombre">Nombre *</label>
                        <input type="text" class="form-control border" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col my-2">
                        <label for="correo">Correo electrónico *</label>
                        <input type="text" class="form-control border" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col my-2">
                        <label for="telefono">Télefono (Opcional)</label>
                        <input type="number" class="form-control border">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col my-2">
                        <label for="celular">Celular *</label>
                        <input type="number" class="form-control border" require>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col my-2">
                        <label for="celular">Mensaje *</label>
                        <textarea name="mensaje" id="" cols="" rows="5" class="form-control border"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col my-2 d-flex justify-content-center">
                        <input type="submit" class="btn btn-contacto" value="Enviar">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container my-5 col-sm-12 col-md-8 col-lg-4 col-xl-4">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h1 class="title-location">¿Dónde estamos?</h1>
        </div>
    </div>
    <div class="row my-5 d-flex justify-content-center">
        <div class="col d-flex justify-content-center">
            <img src="{{Storage::url('contacto/waze.png')}}" alt="">
        </div>
        <div class="col d-flex justify-content-center">
        <img src="{{Storage::url('contacto/gMaps.png')}}" alt="">

        </div>
    </div>
</div>
@endsection

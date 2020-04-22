@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('publicaciones.index') ])
            @slot('tipoFormulario')
                Formulario para editar una publicación.
            @endslot
            @slot('informacionFormulario')
                Modifique la información de la publicación.
            @endslot
        @endcomponent
        <form class="" action="{{ route('publicaciones.update', $publicacion->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group row">
                <label for="nombre" class="col-md-3 col-form-label text-md-left">
                    {{ __('Nombre') }} <span class="text-danger">*</span>
                    @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $publicacion->nombre }}" required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-md-3 col-form-label text-md-left">
                    {{ __('Breve descripción') }} <span class="text-danger">*</span>
                    @if ($errors->has('descripcion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </label>

                <div class="col-md-6">
                    <textarea  id="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" required>{{ $publicacion->descripcion }}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="portada" class="col-md-3 col-form-label text-md-left">
                    {{ __('Portada') }}
                    <p class="text-muted"><small>Dimensión: 350x282</small></p>
                    @if ($errors->has('portada'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('portada') }}</strong>
                        </span>
                    @endif
                </label>

                <div class="col-md-6">
                    <input id="portada" type="file" class="form-control{{ $errors->has('portada') ? ' is-invalid' : '' }}" name="portada" accept="image/*">
                </div>
            </div>

            <div class="form-group row">
                <label for="archivo" class="col-md-3 col-form-label text-md-left">
                    {{ __('Archivo (.pdf)') }}
                    @if ($errors->has('archivo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('archivo') }}</strong>
                        </span>
                    @endif
                </label>

                <div class="col-md-6">
                    <input id="archivo" type="file" class="form-control{{ $errors->has('archivo') ? ' is-invalid' : '' }}" name="archivo" accept="application/pdf">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="tipo_publicacion" class="col-md-3 col-form-label text-md-left">
                    {{ __('Tipo de publicación') }} <span class="text-danger">*</span>
                    @if ($errors->has('tipo_publicacion'))
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('tipo_publicacion') }}</strong>
                    </span>
                @endif
                </label>

                <div class="col-md-6">
                    <div class="custom-control custom-radio">
                        <input id="revista" type="radio" class="custom-control-input" name="tipo_publicacion" value="revista" {{ $publicacion->tipo_publicacion == 'revista' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="revista">
                            Revista
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="boletin" type="radio" class="custom-control-input" name="tipo_publicacion" value="boletin" {{ $publicacion->tipo_publicacion == 'boletin' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="boletin">
                            Boletín
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="libro" type="radio" class="custom-control-input" name="tipo_publicacion" value="libro" {{ $publicacion->tipo_publicacion == 'libro' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="libro">
                            Libro
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="articulo" type="radio" class="custom-control-input" name="tipo_publicacion" value="articulo" {{ $publicacion->tipo_publicacion == 'articulo' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="articulo">
                            Artículo
                        </label>
                    </div>
                </div>
            </div>


            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Guardar cambios') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

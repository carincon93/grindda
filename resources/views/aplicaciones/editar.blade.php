@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('aplicaciones.index') ])
            @slot('tipoFormulario')
                Formulario para editar una aplicación.
            @endslot
            @slot('informacionFormulario')
                Modifique la información de la aplicación.
            @endslot
        @endcomponent
        <form class="" action="{{ route('aplicaciones.update', $aplicacion->id) }}" method="post">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group row">
                <label for="nombre" class="col-md-3 col-form-label text-md-left">{{ __('Nombre') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $aplicacion->nombre }}" required autofocus>

                    @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="url" class="col-md-3 col-form-label text-md-left">
                    {{ __('Enlace web') }} <span class="text-danger">*</span>
                    <p class="text-muted"><small>La url debe contener el http://</small></p>
                </label>

                <div class="col-md-6">
                    <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ $aplicacion->url }}" required>

                    @if ($errors->has('url'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    @endif
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

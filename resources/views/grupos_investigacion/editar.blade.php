@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('grupos_investigacion.index') ])
            @slot('tipoFormulario')
                Formulario para editar un grupo de investigación.
            @endslot
            @slot('informacionFormulario')
                Modifique la información del grupo de investigación.
            @endslot
        @endcomponent
        <form class="" action="{{ route('grupos_investigacion.update', $grupoInvestigacion->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group row">
                <label for="nombre" class="col-md-3 col-form-label text-md-left">{{ __('Nombre') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $grupoInvestigacion->nombre }}" required autofocus>

                    @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-md-3 col-form-label text-md-left">{{ __('Descripción') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="descripcion" name="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $grupoInvestigacion->descripcion }}</textarea>

                    @if ($errors->has('descripcion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="que_hacemos" class="col-md-3 col-form-label text-md-left">{{ __('¿Qué hacemos?') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="que_hacemos" name="que_hacemos" class="form-control{{ $errors->has('que_hacemos') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $grupoInvestigacion->que_hacemos }}</textarea>

                    @if ($errors->has('que_hacemos'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('que_hacemos') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="objetivo" class="col-md-3 col-form-label text-md-left">{{ __('Objetivo') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="objetivo" name="objetivo" class="form-control{{ $errors->has('objetivo') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $grupoInvestigacion->objetivo }}</textarea>

                    @if ($errors->has('objetivo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('objetivo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="mision" class="col-md-3 col-form-label text-md-left">{{ __('Misión') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="mision" name="mision" class="form-control{{ $errors->has('mision') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $grupoInvestigacion->mision }}</textarea>

                    @if ($errors->has('mision'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mision') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="vision" class="col-md-3 col-form-label text-md-left">{{ __('Visión') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="vision" name="vision" class="form-control{{ $errors->has('vision') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $grupoInvestigacion->vision }}</textarea>

                    @if ($errors->has('vision'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('vision') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="logo" class="col-md-3 col-form-label text-md-left">{{ __('Logo') }}</label>

                <div class="col-md-6">
                    <input id="logo" type="file" class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo" value="{{ $grupoInvestigacion->logo }}" accept="image/*">

                    @if ($errors->has('logo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('logo') }}</strong>
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

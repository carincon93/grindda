@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('semilleros.index') ])
            @slot('tipoFormulario')
                Formulario para añadir un nuevo semillero.
            @endslot
            @slot('informacionFormulario')
                Ingrese toda la información del semillero.
            @endslot
        @endcomponent
        <form class="" action="{{ route('semilleros.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="nombre" class="col-md-3 col-form-label text-md-left">{{ __('Nombre') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                    @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="tipoSemillero" class="col-md-3 col-form-label text-md-left">{{ __('Tipo de semillero') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="tipoSemillero" class="form-control{{ $errors->has('tipoSemillero') ? ' is-invalid' : '' }}" name="tipoSemillero" required>
                        <option value="">Seleccion un tipo de semillero</option>
                        <option value="semillero tematico" {{ old('tipoSemillero') == 'semillero tematico' ? 'selected' : '' }}>Semillero temático</option>
                        <option value="semillero formacion" {{ old('tipoSemillero') == 'semillero formacion' ? 'selected' : '' }}>Semillero de formación</option>
                    </select>

                    @if ($errors->has('tipoSemillero'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tipoSemillero') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="fechaCreacion" class="col-md-3 col-form-label text-md-left">{{ __('Fecha de creación') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="fechaCreacion" type="date" class="form-control{{ $errors->has('fechaCreacion') ? ' is-invalid' : '' }}" name="fechaCreacion" value="{{ old('fechaCreacion') }}" required>

                    @if ($errors->has('fechaCreacion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fechaCreacion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="imagen" class="col-md-3 col-form-label text-md-left">{{ __('Imagen') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="imagen" type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen" value="{{ old('imagen') }}" accept="image/*" required>

                    @if ($errors->has('imagen'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('imagen') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-md-3 col-form-label text-md-left">{{ __('Descripción') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" rows="8" cols="80" required>{{ old('descripcion') }}</textarea>

                    @if ($errors->has('descripcion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="mision" class="col-md-3 col-form-label text-md-left">{{ __('Misión') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="mision" class="form-control{{ $errors->has('mision') ? ' is-invalid' : '' }}" name="mision" rows="8" cols="80" required>{{ old('mision') }}</textarea>

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
                    <textarea id="vision" class="form-control{{ $errors->has('vision') ? ' is-invalid' : '' }}" name="vision" rows="8" cols="80" required>{{ old('vision') }}</textarea>

                    @if ($errors->has('vision'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('vision') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="justificacion" class="col-md-3 col-form-label text-md-left">{{ __('Justificación') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="justificacion" class="form-control{{ $errors->has('justificacion') ? ' is-invalid' : '' }}" name="justificacion" rows="8" cols="80" required>{{ old('justificacion') }}</textarea>

                    @if ($errors->has('justificacion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('justificacion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="objetivoGeneral" class="col-md-3 col-form-label text-md-left">{{ __('Objetivo general') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="objetivoGeneral" class="form-control{{ $errors->has('objetivoGeneral') ? ' is-invalid' : '' }}" name="objetivoGeneral" rows="8" cols="80" required>{{ old('objetivoGeneral') }}</textarea>

                    @if ($errors->has('objetivoGeneral'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('objetivoGeneral') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="objetivosEspecificos" class="col-md-3 col-form-label text-md-left">{{ __('Objetivos específicos') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="objetivosEspecificos" class="form-control{{ $errors->has('objetivosEspecificos') ? ' is-invalid' : '' }}" name="objetivosEspecificos" rows="8" cols="80" required>{{ old('objetivosEspecificos') }}</textarea>

                    @if ($errors->has('objetivosEspecificos'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('objetivosEspecificos') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="logros" class="col-md-3 col-form-label text-md-left">{{ __('Logros') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="logros" class="form-control{{ $errors->has('logros') ? ' is-invalid' : '' }}" name="logros" rows="8" cols="80" required>{{ old('logros') }}</textarea>

                    @if ($errors->has('logros'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('logros') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Guardar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

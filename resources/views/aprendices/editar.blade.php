@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('aprendices.index') ])
            @slot('tipoFormulario')
                Formulario para editar un aprendiz.
            @endslot
            @slot('informacionFormulario')
                Modifique la información del aprendiz.
            @endslot
        @endcomponent
        <form class="" action="{{ route('aprendices.update', $aprendiz->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group row">
                <label for="nombre" class="col-md-3 col-form-label text-md-left">{{ __('Nombre completo') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $aprendiz->nombre }}" required autofocus>

                    @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label text-md-left">{{ __('Dirección de correo electrónico') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $aprendiz->email }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="tipoDocumento" class="col-md-3 col-form-label text-md-left">{{ __('Tipo de documento') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="tipoDocumento" class="form-control{{ $errors->has('tipoDocumento') ? ' is-invalid' : '' }}" name="tipoDocumento" required>
                        <option value="">Seleccione el tipo de documento</option>
                        <option value="cc" {{ $aprendiz->tipoDocumento == 'cc' ? 'selected' : '' }}>Cédula de ciudadanía</option>
                        <option value="ti" {{ $aprendiz->tipoDocumento == 'ti' ? 'selected' : '' }}>Tarjeta de identidad</option>
                    </select>

                    @if ($errors->has('tipoDocumento'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tipoDocumento') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="numeroDocumento" class="col-md-3 col-form-label text-md-left">{{ __('Número de documento') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="numeroDocumento" type="number" class="form-control{{ $errors->has('numeroDocumento') ? ' is-invalid' : '' }}" name="numeroDocumento" value="{{ $aprendiz->numeroDocumento }}" required>

                    @if ($errors->has('numeroDocumento'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('numeroDocumento') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="tipoVinculacion" class="col-md-3 col-form-label text-md-left">{{ __('Tipo de vinculación') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="tipoVinculacion" class="form-control{{ $errors->has('tipoVinculacion') ? ' is-invalid' : '' }}" name="tipoVinculacion" required>
                        <option value="">Seleccione el tipo de vinculación</option>
                        <option value="aprendiz lectiva" {{ $aprendiz->tipoVinculacion == 'aprendiz lectiva' ? 'selected' : '' }}>Aprendiz lectiva</option>
                        <option value="aprendiz practica" {{ $aprendiz->tipoVinculacion == 'aprendiz practica' ? 'selected' : '' }}>Aprendiz práctica</option>
                        <option value="funcionario contratista" {{ $aprendiz->tipoVinculacion == 'funcionario contratista' ? 'selected' : '' }}>Funcionario contratista</option>
                        <option value="funcionario planta" {{ $aprendiz->tipoVinculacion == 'funcionario planta' ? 'selected' : '' }}>Funcionario planta</option>
                        <option value="instructor contratista" {{ $aprendiz->tipoVinculacion == 'instructor contratista' ? 'selected' : '' }}>Instructor contratista</option>
                        <option value="instructor planta" {{ $aprendiz->tipoVinculacion == 'instructor planta' ? 'selected' : '' }}>Instructor planta</option>
                    </select>

                    @if ($errors->has('tipoVinculacion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tipoVinculacion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="foto" class="col-md-3 col-form-label text-md-left">{{ __('Foto') }}</label>

                <div class="col-md-6">
                    <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" accept="image/*">

                    @if ($errors->has('foto'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('foto') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="numeroCelular" class="col-md-3 col-form-label text-md-left">{{ __('Número de celular') }}</label>

                <div class="col-md-6">
                    <input id="numeroCelular" type="number" class="form-control{{ $errors->has('numeroCelular') ? ' is-invalid' : '' }}" name="numeroCelular" value="{{ $aprendiz->numeroCelular }}">

                    @if ($errors->has('numeroCelular'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('numeroCelular') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="enlace_CvLac" class="col-md-3 col-form-label text-md-left">
                    {{ __('Enlace CvLAC') }}
                    <p class="text-muted"><small>La url debe contener el http://</small></p>
                </label>

                <div class="col-md-6">
                    <input id="enlace_CvLac" type="text" class="form-control{{ $errors->has('enlace_CvLac') ? ' is-invalid' : '' }}" name="enlace_CvLac" value="{{ $aprendiz->enlace_CvLac }}">

                    @if ($errors->has('enlace_CvLac'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('enlace_CvLac') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="programa_formacion_id" class="col-md-3 col-form-label text-md-left">{{ __('Programa de formación') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="programa_formacion_id" class="form-control{{ $errors->has('programa_formacion_id') ? ' is-invalid' : '' }}" name="programa_formacion_id" required>
                        <option value="">Seleccione un programa de formación</option>
                        @foreach ($programasFormacion as $key => $programaFormacion)
                            <option value="{{ $programaFormacion->id }}" {{ $aprendiz->programa_formacion_id == $programaFormacion->id ? 'selected' : '' }}>{{ $programaFormacion->nombre }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('programa_formacion_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('programa_formacion_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="estado" class="col-md-3 col-form-label text-md-left">{{ __('Estado') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="estado" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" name="estado" required>
                        <option value="">Seleccione un estado</option>
                        <option value="activo" {{ $aprendiz->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                        <option value="inactivo" {{ $aprendiz->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                        <option value="pendiente" {{ $aprendiz->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                    </select>

                    @if ($errors->has('estado'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('estado') }}</strong>
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

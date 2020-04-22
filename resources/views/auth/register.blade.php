@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-left">{{ __('Nombre completo') }} <span class="text-danger">*</span></label>

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
                            <label for="email" class="col-md-3 col-form-label text-md-left">{{ __('Dirección de correo electrónico') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-left">{{ __('Contraseña') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-left">{{ __('Confirmar contraseña') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipoDocumento" class="col-md-3 col-form-label text-md-left">{{ __('Tipo de documento') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <select id="tipoDocumento" class="form-control{{ $errors->has('tipoDocumento') ? ' is-invalid' : '' }}" name="tipoDocumento" required>
                                    <option value="">Seleccione el tipo de documento</option>
                                    <option value="cc" {{ old('tipoDocumento') == 'cc' ? 'selected' : '' }}>Cédula de ciudadanía</option>
                                    <option value="ti" {{ old('tipoDocumento') == 'ti' ? 'selected' : '' }}>Tarjeta de identidad</option>
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
                                <input id="numeroDocumento" type="number" class="form-control{{ $errors->has('numeroDocumento') ? ' is-invalid' : '' }}" name="numeroDocumento" value="{{ old('numeroDocumento') }}" required>

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
                                    <option value="aprendiz lectiva" {{ old('tipoVinculacion') == 'aprendiz lectiva' ? 'selected' : '' }}>Aprendiz lectiva</option>
                                    <option value="aprendiz practica" {{ old('tipoVinculacion') == 'aprendiz practica' ? 'selected' : '' }}>Aprendiz práctica</option>
                                    <option value="funcionario contratista" {{ old('tipoVinculacion') == 'funcionario contratista' ? 'selected' : '' }}>Funcionario contratista</option>
                                    <option value="funcionario planta" {{ old('tipoVinculacion') == 'funcionario planta' ? 'selected' : '' }}>Funcionario planta</option>
                                    <option value="instructor contratista" {{ old('tipoVinculacion') == 'instructor contratista' ? 'selected' : '' }}>Instructor contratista</option>
                                    <option value="instructor planta" {{ old('tipoVinculacion') == 'instructor planta' ? 'selected' : '' }}>Instructor planta</option>
                                </select>

                                @if ($errors->has('tipoVinculacion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipoVinculacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profesion" class="col-md-3 col-form-label text-md-left">{{ __('Profesión') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="profesion" type="text" class="form-control{{ $errors->has('profesion') ? ' is-invalid' : '' }}" name="profesion" value="{{ old('profesion') }}" required>

                                @if ($errors->has('profesion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profesion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="foto" class="col-md-3 col-form-label text-md-left">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" accept="image/*">

                                @if ($errors->has('foto'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="numeroCelular" class="col-md-3 col-form-label text-md-left">{{ __('Número de celular') }}</label>

                            <div class="col-md-6">
                                <input id="numeroCelular" type="number" class="form-control{{ $errors->has('numeroCelular') ? ' is-invalid' : '' }}" name="numeroCelular" value="{{ old('numeroCelular') }}">

                                @if ($errors->has('numeroCelular'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numeroCelular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="enlace_CvLac" class="col-md-3 col-form-label text-md-left">{{ __('Enlace CvLac') }}</label>

                            <div class="col-md-6">
                                <input id="enlace_CvLac" type="text" class="form-control{{ $errors->has('enlace_CvLac') ? ' is-invalid' : '' }}" name="enlace_CvLac" value="{{ old('enlace_CvLac') }}">

                                @if ($errors->has('enlace_CvLac'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('enlace_CvLac') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

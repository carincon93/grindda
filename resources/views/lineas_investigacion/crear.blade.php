@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('lineas_investigacion.index') ])
            @slot('tipoFormulario')
                Formulario para añadir una nueva línea de Investigación.
            @endslot
            @slot('informacionFormulario')
                Ingrese toda la información de la línea de Investigación.
            @endslot
        @endcomponent
        <form class="" action="{{ route('lineas_investigacion.store') }}" method="post" enctype="multipart/form-data">
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
                <label for="descripcion" class="col-md-3 col-form-label text-md-left">{{ __('Descripción') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="descripcion" name="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ old('descripcion') }}</textarea>

                    @if ($errors->has('descripcion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong>
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
                <label for="lider_id" class="col-md-3 col-form-label text-md-left">{{ __('Líder') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="lider_id" class="form-control{{ $errors->has('lider_id') ? ' is-invalid' : '' }}" name="lider_id" required>
                        <option value="">Seleccione un líder</option>
                        @foreach ($usuarios as $key => $usuario)
                            <option value="{{ $usuario->id }}" {{ old('lider_id') == $usuario->id ? 'selected' : '' }}>{{ $usuario->nombre }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('lider_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lider_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="estado" class="col-md-3 col-form-label text-md-left">{{ __('Estado') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="estado" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" name="estado" required>
                        <option value="">Seleccione un estado</option>
                        <option value="activo" {{ old('estado') == 'activo' ? 'selected' : '' }}>Activo</option>
                        <option value="inactivo" {{ old('estado') == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
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

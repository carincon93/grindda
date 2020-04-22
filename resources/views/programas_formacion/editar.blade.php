@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('programas_formacion.index') ])
            @slot('tipoFormulario')
                Formulario para editar un programa de formación.
            @endslot
            @slot('informacionFormulario')
                Modifique la información del programa de formación.
            @endslot
        @endcomponent
        <form class="" action="{{ route('programas_formacion.update', $programaFormacion->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group row">
                <label for="nombre" class="col-md-3 col-form-label text-md-left">{{ __('Nombre completo') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $programaFormacion->nombre }}" required autofocus>

                    @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="tipoFormacion" class="col-md-3 col-form-label text-md-left">{{ __('Tipo de formación') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="tipoFormacion" class="form-control{{ $errors->has('tipoFormacion') ? ' is-invalid' : '' }}" name="tipoFormacion" required>
                        <option value="">Seleccione el tipo de formación</option>
                        <option value="técnico" {{ $programaFormacion->tipoFormacion == 'técnico' ? 'selected' : '' }}>Técnico</option>
                        <option value="tecnólogo" {{ $programaFormacion->tipoFormacion == 'tecnólogo' ? 'selected' : '' }}>Tecnólogo</option>
                    </select>

                    @if ($errors->has('tipoFormacion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tipoFormacion') }}</strong>
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

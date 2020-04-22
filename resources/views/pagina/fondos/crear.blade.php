@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('fondos.index') ])
            @slot('tipoFormulario')
                Formulario para añadir un nuevo fondo a la página principal.
            @endslot
            @slot('informacionFormulario')

            @endslot
        @endcomponent
        <form class="" action="{{ route('fondos.store') }}" method="post" enctype="multipart/form-data">
            @csrf
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

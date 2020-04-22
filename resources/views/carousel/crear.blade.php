@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('carousel.index') ])
            @slot('tipoFormulario')
                Formulario para añadir un nuevo ítem en el carousel.
            @endslot
            @slot('informacionFormulario')
                Ingrese toda la información del ítem.
            @endslot
        @endcomponent
        <form class="" action="{{ route('carousel.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="tipoItem" class="col-md-3 col-form-label">{{ __('Tipo') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <div class="custom-control custom-radio">
                        <input id="evento" type="radio" name="tipoItem" value="evento" class="custom-control-input" {{ old('tipoItem') == 'evento' ? 'checked' : '' }} v-model="isEvento">
                        <label class="custom-control-label" for="evento">
                            Evento
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="otro" type="radio" name="tipoItem" value="otro" class="custom-control-input" {{ old('tipoItem') == 'otro' ? 'checked' : '' }} v-model="isEvento">
                        <label class="custom-control-label" for="otro">
                            Otro
                        </label>
                    </div>

                    @if ($errors->has('tipoItem'))
                        <span class="invalid-feedback d-block">
                            <strong>{{ $errors->first('tipoItem') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div v-if="isEvento == 'evento'">
                <div class="form-group row">
                    <label for="evento_id" class="col-md-3 col-form-label text-md-left">{{ __('Evento') }} <span class="text-danger">*</span></label>

                    <div class="col-md-6">
                        <select id="evento_id" class="form-control{{ $errors->has('evento_id') ? ' is-invalid' : '' }}" name="evento_id" required>
                            <option value="">Seleccione un evento</option>
                            @foreach ($eventos as $key => $evento)
                                <option value="{{ $evento->id }}" {{ old('evento_id') == $evento->id ? 'selected' : '' }}>{{ $evento->clasificacion }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('evento_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('evento_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label for="descripcion" class="col-md-3 col-form-label text-md-left">{{ __('Descripción') }}</label>

                    <div class="col-md-6">
                        <p>Esta información sera la ya registrada</p>
                    </div>
                </div> --}}
            </div>

            <div class="form-group row">
                <label for="imagen" class="col-md-3 col-form-label">
                    {{ __('Imagen') }} <span class="text-danger">*</span>
                    <p class="text-muted"><small>Dimensión: 1000x350</small></p>
                </label>

                <div class="col-md-6">
                    <input id="imagen" type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen" value="{{ old('imagen') }}" accept="image/*" required>

                    @if ($errors->has('imagen'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('imagen') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div v-if="isEvento == 'otro'">
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
                    <label for="url" class="col-md-3 col-form-label">
                        {{ __('Url') }}
                        <p class="text-muted"><small>La url debe contener el http://</small></p>
                    </label>

                    <div class="col-md-6">
                        <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" placeholder="http://google.com">

                        @if ($errors->has('url'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-9 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Guardar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

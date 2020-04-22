@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('proyectos.index') ])
            @slot('tipoFormulario')
                Formulario para editar un proyecto.
            @endslot
            @slot('informacionFormulario')
                Modifique la información del proyecto.
            @endslot
        @endcomponent
        <form class="" action="{{ route('proyectos.update', $proyecto->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group row">
                <label for="nombre" class="col-md-3 col-form-label text-md-left">{{ __('Nombre') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $proyecto->nombre }}" required autofocus>

                    @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="resultado" class="col-md-3 col-form-label text-md-left">{{ __('Resultado') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="resultado" name="resultado" class="form-control{{ $errors->has('resultado') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $proyecto->resultado }}</textarea>

                    @if ($errors->has('resultado'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('resultado') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="lineaProgramatica" class="col-md-3 col-form-label text-md-left">{{ __('Línea programática') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="lineaProgramatica" class="form-control{{ $errors->has('lineaProgramatica') ? ' is-invalid' : '' }}" name="lineaProgramatica">
                        <option value="">Selecciona una línea programática</option>
                        <option value="asesorias tecnoparque" {{ $proyecto->lineaProgramatica == 'asesorias tecnoparque' ? 'selected' : '' }}>Asesorías tecnoparque</option>
                        <option value="infraestructura" {{ $proyecto->lineaProgramatica == 'infraestructura' ? 'selected' : '' }}>Infraestructura</option>
                        <option value="innovacion y desarrollo tecnologico" {{ $proyecto->lineaProgramatica == 'innovacion y desarrollo tecnologico' ? 'selected' : '' }}>Innovación y desarrollo tecnológico</option>
                        <option value="investigacion aplicada" {{ $proyecto->lineaProgramatica == 'investigacion aplicada' ? 'selected' : '' }}>Investigación aplicada</option>
                    </select>

                    @if ($errors->has('lineaProgramatica'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lineaProgramatica') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="fechaCreacion" class="col-md-3 col-form-label text-md-left">{{ __('Fecha de creación') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="fechaCreacion" type="date" class="form-control{{ $errors->has('fechaCreacion') ? ' is-invalid' : '' }}" name="fechaCreacion" value="{{ $proyecto->fechaCreacion }}" required>

                    @if ($errors->has('fechaCreacion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fechaCreacion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="objetivoGeneral" class="col-md-3 col-form-label text-md-left">{{ __('Objetivo general') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="objetivoGeneral" name="objetivoGeneral" class="form-control{{ $errors->has('objetivoGeneral') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $proyecto->objetivoGeneral }}</textarea>

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
                    <textarea id="objetivosEspecificos" name="objetivosEspecificos" class="form-control{{ $errors->has('objetivosEspecificos') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $proyecto->objetivosEspecificos }}</textarea>

                    @if ($errors->has('objetivosEspecificos'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('objetivosEspecificos') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="imagen" class="col-md-3 col-form-label text-md-left">{{ __('Imagen') }}</label>

                <div class="col-md-6">
                    <input id="imagen" type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen" value="{{ $proyecto->imagen }}" accept="image/*">

                    @if ($errors->has('imagen'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('imagen') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="url" class="col-md-3 col-form-label text-md-left">{{ __('Url') }}</label>

                <div class="col-md-6">
                    <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ $proyecto->url }}">

                    @if ($errors->has('url'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="lider_id" class="col-md-3 col-form-label text-md-left">{{ __('Líder del proyecto') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="lider_id" class="form-control{{ $errors->has('lider_id') ? ' is-invalid' : '' }}" name="lider_id">
                        <option value="">Selecciona el líder del proyecto</option>
                        @foreach ($usuarios as $key => $usuario)
                            <option value="{{ $usuario->id }}" {{ $usuario->id == $proyecto->lider_id ? 'selected' : '' }}>{{ $usuario->nombre }}</option>
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
                <label for="autor_id" class="col-md-3 col-form-label text-md-left">{{ __('Autores') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <buscar-coautor :errors="{{ $errors }}" :coautoresguardados="{{ $proyecto->autores }}"></buscar-coautor>

                    @if ($errors->has('autor_id'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('autor_id') }}</strong>
                        </span>
                    @endif
                </div>

            </div>

            <div class="form-group row">
                <label for="" class="col-md-3 col-form-label text-md-left">{{ __('Semilleros') }} <span class="text-danger">*</span></label>
                <div class="col-md-6">
                    @foreach ($semilleros as $key => $semillero)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="{{ $semillero->nombre }}" name="semillero_id[]" value="{{ $semillero->id }}" {{ $proyecto->semilleros->contains($semillero) == true ? 'checked' : '' }}>
                            <label class="custom-control-label" for="{{ $semillero->nombre }}">{{ $semillero->nombre }}</label>
                        </div>
                    @endforeach

                    @if ($errors->has('semillero_id'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('semillero_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="estadoPublicacion" class="col-md-3 col-form-label text-md-left">{{ __('Estado de la publicación') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <div class="custom-control custom-radio">
                        <input id="publicar" type="radio" name="estadoPublicacion" value="publicar" class="custom-control-input" {{ $proyecto->estadoPublicacion == 'publicar' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="publicar">
                            Publicar
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="noPublicado" type="radio" name="estadoPublicacion" value="no publicado" class="custom-control-input" {{ $proyecto->estadoPublicacion == 'no publicado' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="noPublicado">
                            No publicar
                        </label>
                    </div>
                </div>

                @if ($errors->has('estadoPublicacion'))
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('estadoPublicacion') }}</strong>
                    </span>
                @endif
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

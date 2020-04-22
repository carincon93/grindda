@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('roles.index') ])
            @slot('tipoFormulario')
                Formulario para añadir un nuevo rol.
            @endslot
            @slot('informacionFormulario')
                Ingrese toda la información del rol.
            @endslot
        @endcomponent
        <form class="" action="{{ route('roles.store') }}" method="post">
            @csrf

            <div class="form-group row">
                <label for="nombre" class="col-md-3 col-form-label">{{ __('Nombre') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required>

                    @if ($errors->has('nombre'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-md-3 col-form-label">{{ __('Descripción') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" rows="8" cols="80" required>{{ old('descripcion') }}</textarea>

                    @if ($errors->has('descripcion'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('permisos') ? ' is-invalid' : '' }}">

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - aliados <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-aliado" name="permisos[]" value="{{ __('crear-aliado') }}" {{ old('permisos') == 'crear-aliado' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-aliado">{{ __('Crear aliado') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-aliado" name="permisos[]" value="{{ __('ver-aliado') }}" {{ old('permisos') == 'ver-aliado' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-aliado">{{ __('Ver aliado') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-aliado" name="permisos[]" value="{{ __('editar-aliado') }}" {{ old('permisos') == 'editar-aliado' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-aliado">{{ __('Editar aliado') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-aliado" name="permisos[]" value="{{ __('eliminar-aliado') }}" {{ old('permisos') == 'eliminar-aliado' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-aliado">{{ __('Eliminar aliado') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - aplicaciones <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-aplicacion" name="permisos[]" value="{{ __('crear-aplicacion') }}" {{ old('permisos') == 'crear-aplicacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-aplicacion">{{ __('Crear aplicación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-aplicacion" name="permisos[]" value="{{ __('ver-aplicacion') }}" {{ old('permisos') == 'ver-aplicacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-aplicacion">{{ __('Ver aplicación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-aplicacion" name="permisos[]" value="{{ __('editar-aplicacion') }}" {{ old('permisos') == 'editar-aplicacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-aplicacion">{{ __('Editar aplicación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-aplicacion" name="permisos[]" value="{{ __('eliminar-aplicacion') }}" {{ old('permisos') == 'eliminar-aplicacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-aplicacion">{{ __('Eliminar aplicación') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - aprendices <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-aprendiz" name="permisos[]" value="{{ __('crear-aprendiz') }}" {{ old('permisos') == 'crear-aprendiz' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-aprendiz">{{ __('Crear aprendiz') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-aprendiz" name="permisos[]" value="{{ __('ver-aprendiz') }}" {{ old('permisos') == 'ver-aprendiz' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-aprendiz">{{ __('Ver aprendiz') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-aprendiz" name="permisos[]" value="{{ __('editar-aprendiz') }}" {{ old('permisos') == 'editar-aprendiz' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-aprendiz">{{ __('Editar aprendiz') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-aprendiz" name="permisos[]" value="{{ __('eliminar-aprendiz') }}" {{ old('permisos') == 'eliminar-aprendiz' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-aprendiz">{{ __('Eliminar aprendiz') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - eventos <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-evento" name="permisos[]" value="{{ __('crear-evento') }}" {{ old('permisos') == 'crear-evento' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-evento">{{ __('Crear evento') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-evento" name="permisos[]" value="{{ __('ver-evento') }}" {{ old('permisos') == 'ver-evento' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-evento">{{ __('Ver evento') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-evento" name="permisos[]" value="{{ __('editar-evento') }}" {{ old('permisos') == 'editar-evento' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-evento">{{ __('Editar evento') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-evento" name="permisos[]" value="{{ __('eliminar-evento') }}" {{ old('permisos') == 'eliminar-evento' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-evento">{{ __('Eliminar evento') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - grupos de investigación <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-grupo-investigacion" name="permisos[]" value="{{ __('crear-grupo-investigacion') }}" {{ old('permisos') == 'crear-grupo-investigacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-grupo-investigacion">{{ __('Crear grupo de investigación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-grupo-investigacion" name="permisos[]" value="{{ __('ver-grupo-investigacion') }}" {{ old('permisos') == 'ver-grupo-investigacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-grupo-investigacion">{{ __('Ver grupo de investigación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-grupo-investigacion" name="permisos[]" value="{{ __('editar-grupo-investigacion') }}" {{ old('permisos') == 'editar-grupo-investigacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-grupo-investigacion">{{ __('Editar grupo de investigación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-grupo-investigacion" name="permisos[]" value="{{ __('eliminar-grupo-investigacion') }}" {{ old('permisos') == 'eliminar-grupo-investigacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-grupo-investigacion">{{ __('Eliminar grupo de investigación') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - líneas de investigación <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-linea-investigacion" name="permisos[]" value="{{ __('crear-linea-investigacion') }}" {{ old('permisos') == 'crear-linea-investigacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-linea-investigacion">{{ __('Crear grupo de investigación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-linea-investigacion" name="permisos[]" value="{{ __('ver-linea-investigacion') }}" {{ old('permisos') == 'ver-linea-investigacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-linea-investigacion">{{ __('Ver grupo de investigación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-linea-investigacion" name="permisos[]" value="{{ __('editar-linea-investigacion') }}" {{ old('permisos') == 'editar-linea-investigacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-linea-investigacion">{{ __('Editar grupo de investigación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-linea-investigacion" name="permisos[]" value="{{ __('eliminar-linea-investigacion') }}" {{ old('permisos') == 'eliminar-linea-investigacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-linea-investigacion">{{ __('Eliminar grupo de investigación') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - programas de formación <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-programa-formacion" name="permisos[]" value="{{ __('crear-programa-formacion') }}" {{ old('permisos') == 'crear-programa-formacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-programa-formacion">{{ __('Crear programa de formación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-programa-formacion" name="permisos[]" value="{{ __('ver-programa-formacion') }}" {{ old('permisos') == 'ver-programa-formacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-programa-formacion">{{ __('Ver programa de formación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-programa-formacion" name="permisos[]" value="{{ __('editar-programa-formacion') }}" {{ old('permisos') == 'editar-programa-formacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-programa-formacion">{{ __('Editar programa de formación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-programa-formacion" name="permisos[]" value="{{ __('eliminar-programa-formacion') }}" {{ old('permisos') == 'eliminar-programa-formacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-programa-formacion">{{ __('Eliminar programa de formación') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - proyectos <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-proyecto" name="permisos[]" value="{{ __('crear-proyecto') }}" {{ old('permisos') == 'crear-proyecto' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-proyecto">{{ __('Crear proyecto') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-proyecto" name="permisos[]" value="{{ __('ver-proyecto') }}" {{ old('permisos') == 'ver-proyecto' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-proyecto">{{ __('Ver proyecto') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-proyecto" name="permisos[]" value="{{ __('editar-proyecto') }}" {{ old('permisos') == 'editar-proyecto' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-proyecto">{{ __('Editar proyecto') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-proyecto" name="permisos[]" value="{{ __('eliminar-proyecto') }}" {{ old('permisos') == 'eliminar-proyecto' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-proyecto">{{ __('Eliminar proyecto') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - publicaciones <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-publicacion" name="permisos[]" value="{{ __('crear-publicacion') }}" {{ old('permisos') == 'crear-publicacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-publicacion">{{ __('Crear publicación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-publicacion" name="permisos[]" value="{{ __('ver-publicacion') }}" {{ old('permisos') == 'ver-publicacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-publicacion">{{ __('Ver publicación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-publicacion" name="permisos[]" value="{{ __('editar-publicacion') }}" {{ old('permisos') == 'editar-publicacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-publicacion">{{ __('Editar publicación') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-publicacion" name="permisos[]" value="{{ __('eliminar-publicacion') }}" {{ old('permisos') == 'eliminar-publicacion' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-publicacion">{{ __('Eliminar publicación') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - roles <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-rol" name="permisos[]" value="{{ __('crear-rol') }}" {{ old('permisos') == 'crear-rol' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-rol">{{ __('Crear rol') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-rol" name="permisos[]" value="{{ __('ver-rol') }}" {{ old('permisos') == 'ver-rol' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-rol">{{ __('Ver rol') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-rol" name="permisos[]" value="{{ __('editar-rol') }}" {{ old('permisos') == 'editar-rol' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-rol">{{ __('Editar rol') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-rol" name="permisos[]" value="{{ __('eliminar-rol') }}" {{ old('permisos') == 'eliminar-rol' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-rol">{{ __('Eliminar rol') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - semilleros <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-semillero" name="permisos[]" value="{{ __('crear-semillero') }}" {{ old('permisos') == 'crear-semillero' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-semillero">{{ __('Crear semillero') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-semillero" name="permisos[]" value="{{ __('ver-semillero') }}" {{ old('permisos') == 'ver-semillero' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-semillero">{{ __('Ver semillero') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-semillero" name="permisos[]" value="{{ __('editar-semillero') }}" {{ old('permisos') == 'editar-semillero' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-semillero">{{ __('Editar semillero') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-semillero" name="permisos[]" value="{{ __('eliminar-semillero') }}" {{ old('permisos') == 'eliminar-semillero' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-semillero">{{ __('Eliminar semillero') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Permisos - usuarios <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="crear-usuario" name="permisos[]" value="{{ __('crear-usuario') }}" {{ old('permisos') == 'crear-usuario' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="crear-usuario">{{ __('Crear usuario') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ver-usuario" name="permisos[]" value="{{ __('ver-usuario') }}" {{ old('permisos') == 'ver-usuario' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="ver-usuario">{{ __('Ver usuario') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="editar-usuario" name="permisos[]" value="{{ __('editar-usuario') }}" {{ old('permisos') == 'editar-usuario' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="editar-usuario">{{ __('Editar usuario') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="eliminar-usuario" name="permisos[]" value="{{ __('eliminar-usuario') }}" {{ old('permisos') == 'eliminar-usuario' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="eliminar-usuario">{{ __('Eliminar usuario') }}</label>
                        </div>
                    </div>
                </div>

                @if ($errors->has('permisos'))
                    <span class="invalid-feedback d-block pl-4 pb-3">
                        <strong>{{ $errors->first('permisos') }}</strong>
                    </span>
                @endif
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

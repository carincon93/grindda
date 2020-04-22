@extends('layouts.panel')

@section('content')
    <div class="container">
        @component('partials.info_formulario', ['rutaAtras' => route('eventos.index') ])
            @slot('tipoFormulario')
                Formulario para editar un evento.
            @endslot
            @slot('informacionFormulario')
                Modifique la información del evento.
            @endslot
        @endcomponent
        <form class="" action="{{ route('eventos.update', $evento->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group row">
                <label for="nombreEvento" class="col-md-3 col-form-label text-md-left">{{ __('Nombre del evento') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="nombreEvento" type="text" class="form-control{{ $errors->has('nombreEvento') ? ' is-invalid' : '' }}" name="nombreEvento" value="{{ $evento->nombreEvento }}"  required>

                    @if ($errors->has('nombreEvento'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombreEvento') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="clasificacion" class="col-md-3 col-form-label text-md-left">{{ __('Clasificación') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="clasificacion" class="form-control{{ $errors->has('clasificacion') ? ' is-invalid' : '' }}" name="clasificacion" required>
                        <option value="">Seleccione una clasificación</option>
                        <option value="encuentros de semilleros" {{ $evento->clasificacion == 'encuentros de semilleros' ? 'selected' : '' }}>
                            Encuentros de semilleros
                        </option>
                        <option value="eventos internacionales" {{ $evento->clasificacion == 'eventos internacionales' ? 'selected' : '' }}>
                            Eventos internacionales
                        </option>
                        <option value="eventos nacionales" {{ $evento->clasificacion == 'eventos nacionales' ? 'selected' : '' }}>
                            Eventos nacionales
                        </option>
                        <option value="feria de la industria y la construcción" {{ $evento->clasificacion == 'feria de la industria y la construcción' ? 'selected' : '' }}>
                            Feria de la Industria y la Construcción
                        </option>
                        <option value="innovación desde la formación" {{ $evento->clasificacion == 'innovación desde la formación' ? 'selected' : '' }}>
                            Innovación desde la formación
                        </option>
                        <option value="innovación en las empresas" {{ $evento->clasificacion == 'innovación en las empresas' ? 'selected' : '' }}>
                            Innovación en las empresas
                        </option>
                        <option value="RECICLARTE" {{ $evento->clasificacion == 'RECICLARTE' ? 'selected' : '' }}>
                            RECICLARTE
                        </option>
                        <option value="REDCOLSI" {{ $evento->clasificacion == 'REDCOLSI' ? 'selected' : '' }}>
                            REDCOLSI
                        </option>
                        <option value="RREDSI" {{ $evento->clasificacion == 'RREDSI' ? 'selected' : '' }}>
                            RREDSI
                        </option>
                        <option value="seminarios de sostenibilidad" {{ $evento->clasificacion == 'seminarios de sostenibilidad' ? 'selected' : '' }}>
                            Seminarios de sostenibilidad
                        </option>
                        <option value="talleres de diseño" {{ $evento->clasificacion == 'talleres de diseño' ? 'selected' : '' }}>
                            Talleres de diseño
                        </option>
                    </select>

                    @if ($errors->has('clasificacion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('clasificacion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-md-3 col-form-label text-md-left quill">{{ __('Descripción') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="descripcion" name="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $evento->descripcion }}</textarea>

                    @if ($errors->has('descripcion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="lugar" class="col-md-3 col-form-label text-md-left">{{ __('Lugar') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="lugar" type="text" class="form-control{{ $errors->has('lugar') ? ' is-invalid' : '' }}" name="lugar" value="{{ $evento->lugar }}" required>

                    @if ($errors->has('lugar'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lugar') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="logros" class="col-md-3 col-form-label text-md-left">{{ __('Logros') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <textarea id="logros" name="logros" class="form-control{{ $errors->has('logros') ? ' is-invalid' : '' }}" rows="8" cols="80" required>{{ $evento->logros }}</textarea>

                    @if ($errors->has('logros'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('logros') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="imagen" class="col-md-3 col-form-label text-md-left">{{ __('Imagen') }}</label>

                <div class="col-md-6">
                    <input id="imagen" type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen" value="{{ $evento->imagen }}" accept="image/*">

                    @if ($errors->has('imagen'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('imagen') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="miniatura" class="col-md-3 col-form-label text-md-left">
                    {{ __('Miniatura') }}
                    <p class="text-muted"><small>Dimensión recomendada: 445 x 330 (px)</small></p>
                </label>


                <div class="col-md-6">
                    <input id="miniatura" type="file" class="form-control{{ $errors->has('miniatura') ? ' is-invalid' : '' }}" name="miniatura" value="{{ $evento->miniatura }}" accept="image/*">

                    @if ($errors->has('miniatura'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('miniatura') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="estadoPublicacion" class="col-md-3 col-form-label text-md-left">{{ __('Estado de la publicación') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <div class="custom-control custom-radio">
                        <input id="publicar" type="radio" name="estadoPublicacion" value="publicar" class="custom-control-input" {{ $evento->estadoPublicacion == 'publicar' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="publicar">
                            Publicar
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="noPublicado" type="radio" name="estadoPublicacion" value="no publicado" class="custom-control-input" {{ $evento->estadoPublicacion == 'no publicado' ? 'checked' : '' }}>
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

            <div class="form-group row">
                <label for="fechaInicio" class="col-md-3 col-form-label text-md-left">{{ __('Fecha de inicio') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="fechaInicio" type="date" class="form-control{{ $errors->has('fechaInicio') ? ' is-invalid' : '' }}" name="fechaInicio" value="{{ $evento->fechaInicio }}" required>

                    @if ($errors->has('fechaInicio'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fechaInicio') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="fechaFin" class="col-md-3 col-form-label text-md-left">{{ __('Fecha de fin') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <input id="fechaFin" type="date" class="form-control{{ $errors->has('fechaFin') ? ' is-invalid' : '' }}" name="fechaFin" value="{{ $evento->fechaFin }}" required>

                    @if ($errors->has('fechaFin'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fechaFin') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="ano" class="col-md-3 col-form-label text-md-left">{{ __('Año') }} <span class="text-danger">*</span></label>

                <div class="col-md-6">
                    <select id="ano" class="form-control{{ $errors->has('ano') ? ' is-invalid' : '' }}" name="ano" required>
                        <option value="">Seleccione un año</option>
                        @for ($i=10; $i < 40; $i++)
                            <option value="20{{ $i }}" {{ $evento->ano == '20'.$i ? 'selected' : '' }}>20{{ $i }}</option>
                        @endfor
                    </select>

                    @if ($errors->has('ano'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ano') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            {{-- Vue  --}}
            <div class="row">
                <div class="col-md-3">
                    <h3>Adjuntar archivos / enlaces</h3>
                    <p class="text-muted"><small>Si deseas adjuntar achivos o enlaces que den más información sobre este evento da clic en "Adjuntar"</small></p>
                </div>
                <div class="col-md-6">
                    <button @click="addRow" type="button" class="btn btn-success mt-4"><i class="fas fa-link"></i> Adjuntar</button>
                </div>

            </div>

            <hr>

            <div v-for="(input, index) in inputs">
                <div class="form-group row">
                    <label for="titulo" class="col-md-3 col-form-label text-md-left">{{ __('Título') }} <span class="text-danger">*</span></label>

                    <div class="col-md-6">
                        <input id="titulo" type="text" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo[]" required>

                        @if ($errors->has('titulo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-3 col-form-label text-md-left">
                        {{ __('Url') }}
                        <p><small>Esta url es para dirigir a una página externa. La url debe contener el http:// o https:// </small></p>
                    </label>

                    <div class="col-md-6">
                        <input id="url" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url[]">

                        @if ($errors->has('url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="informacion" class="col-md-3 col-form-label text-md-left">{{ __('Información') }}</label>

                    <div class="col-md-6">
                        <input id="informacion" type="text" class="form-control{{ $errors->has('informacion') ? ' is-invalid' : '' }}" name="informacion[]">

                        @if ($errors->has('informacion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('informacion') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="archivo" class="col-md-3 col-form-label text-md-left">{{ __('Archivo') }}</label>

                    <div class="col-md-6">
                        <input id="archivo" type="file" class="form-control{{ $errors->has('archivo') ? ' is-invalid' : '' }}" name="archivo[]" accept="application/*">

                        @if ($errors->has('archivo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('archivo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <button @click="deleteRow(index)" type="button" class="btn btn-default p-0 text-decoration-underline"><i class="fas fa-trash"></i> Eliminar</button>
                </div>
                <hr>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Guardar cambios') }}
                    </button>
                </div>
            </div>
        </form>
        <br>
        <h3>Administrador de archivos / enlaces</h3>
        <div class="card table-responsive mt-5" data-toggle="tooltip" data-placement="top" title="Estos son los archivos o enlaces que se van a mostrar en el detalle del evento">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Información</th>
                        <th>url</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($evento->archivos as $key => $archivo)
                        <tr>
                            <td>{{ $archivo->titulo }}</td>
                            <td>{{ $archivo->informacion }}</td>
                            <td><a href="{{ $archivo->url }}">{{ $archivo->url }}</a></td>
                            <td>
                                <div class="dropdown btn-circle">
                                    <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-fw fa-trash"></i>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                        <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este archivo?</p>
                                        <form action="{{ route('archivos.destroy', $archivo->id) }}" method="POST" class="d-block form-destroy dropdown-item">
                                            @method('delete')
                                            @csrf

                                            <button type="submit" class="btn btn-danger d-block w-100">Confirmar</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

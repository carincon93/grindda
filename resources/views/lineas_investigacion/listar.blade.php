@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-linea-investigacion')
            <a href="{{ route('lineas_investigacion.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir línea de investigación</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Líder</th>
                        <th>Fecha de creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lineasInvestigacion as $key => $lineaInvestigacion)
                        <tr>
                            <td>{{ $lineaInvestigacion->nombre }}</td>
                            <td>{{ $lineaInvestigacion->lider->nombre }}</td>
                            <td><span class="fecha">{{ $lineaInvestigacion->fechaCreacion }}</span></td>
                            <td>
                                @can ('ver-linea-investigacion')
                                    <a class="btn-circle" href="{{ route('lineas_investigacion.show', $lineaInvestigacion->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-linea-investigacion')
                                    <a class="btn-circle" href="{{ route('lineas_investigacion.edit', $lineaInvestigacion->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-linea-investigacion')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar esta línea de investigación?</p>
                                            <form action="{{ route('lineas_investigacion.destroy', $lineaInvestigacion->id) }}" method="POST" class="d-block form-destroy dropdown-item">
                                                @method('delete')
                                                @csrf

                                                <button type="submit" class="btn btn-danger d-block w-100">Confirmar</button>
                                            </form>
                                        </div>
                                    </div>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

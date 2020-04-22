@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-grupo-investigacion')
            <a href="{{ route('grupos_investigacion.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir grupo de investigación</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Objetivo</th>
                        <th>Misión</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gruposInvestigacion as $key => $grupoInvestigacion)
                        <tr>
                            <td>{{ $grupoInvestigacion->nombre }}</td>
                            <td>{{ $grupoInvestigacion->objetivo }}</td>
                            <td>{{ $grupoInvestigacion->mision }}</td>
                            <td>
                                @can ('ver-grupo-investigacion')
                                    <a class="btn-circle" href="{{ route('grupos_investigacion.show', $grupoInvestigacion->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-grupo-investigacion')
                                    <a class="btn-circle" href="{{ route('grupos_investigacion.edit', $grupoInvestigacion->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-grupo-investigacion')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este grupo investigación?</p>
                                            <form action="{{ route('grupos_investigacion.destroy', $grupoInvestigacion->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

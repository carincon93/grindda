@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-programa-formacion')
            <a href="{{ route('programas_formacion.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir programa de formación</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo de formación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($programasFormacion as $key => $programaFormacion)
                        <tr>
                            <td>{{ $programaFormacion->nombre }}</td>
                            <td>{{ $programaFormacion->tipoFormacion }}</td>
                            <td>
                                @can ('ver-programa-formacion')
                                    <a class="btn-circle" href="{{ route('programas_formacion.show', $programaFormacion->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-programa-formacion')
                                    <a class="btn-circle" href="{{ route('programas_formacion.edit', $programaFormacion->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-programa-formacion')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este programa de formación?</p>
                                            <form action="{{ route('programas_formacion.destroy', $programaFormacion->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

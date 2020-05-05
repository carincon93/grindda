@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-rol')
            <a href="{{ route('roles.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir rol</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $rol)
                        <tr>
                            <td>{{ $rol->nombre }}</td>
                            <td>{{ $rol->descripcion }}</td>
                            <td>
                                @can ('ver-rol')
                                    <a class="btn-circle" href="{{ route('roles.show', $rol->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-rol')
                                    <a class="btn-circle" href="{{ route('roles.edit', $rol->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-rol')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este rol?</p>
                                            <form action="{{ route('roles.destroy', $rol->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

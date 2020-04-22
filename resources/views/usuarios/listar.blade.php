@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-usuario')
            <a href="{{ route('usuarios.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir usuario</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo electrónico</th>
                        <th>Número de celular</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $key => $usuario)
                        <tr>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td><a href="tel:{{ $usuario->numeroCelular }}">{{ $usuario->numeroCelular }}</a></td>
                            <td>
                                @can ('ver-usuario')
                                    <a class="btn-circle" href="{{ route('usuarios.show', $usuario->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-usuario')
                                    <a class="btn-circle" href="{{ route('usuarios.edit', $usuario->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-usuario')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este usuario?</p>
                                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

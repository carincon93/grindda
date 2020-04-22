@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-aprendiz')
            <a href="{{ route('aprendices.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir aprendiz</a>
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
                    @foreach ($aprendices as $key => $aprendiz)
                        <tr>
                            <td>{{ $aprendiz->nombre }}</td>
                            <td>{{ $aprendiz->email }}</td>
                            <td><a href="tel:{{ $aprendiz->numeroCelular }}">{{ $aprendiz->numeroCelular }}</a></td>
                            <td>
                                @can ('ver-aprendiz')
                                    <a class="btn-circle" href="{{ route('aprendices.show', $aprendiz->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-aprendiz')
                                    <a class="btn-circle" href="{{ route('aprendices.edit', $aprendiz->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-aprendiz')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este aprendiz?</p>
                                            <form action="{{ route('aprendices.destroy', $aprendiz->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

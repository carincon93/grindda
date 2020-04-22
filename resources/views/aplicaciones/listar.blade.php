@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-aplicacion')
            <a href="{{ route('aplicaciones.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir apliación</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Url</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aplicaciones as $key => $aplicacion)
                        <tr>
                            <td>{{ $aplicacion->nombre }}</td>
                            <td><a href="{{ $aplicacion->url }}">{{ $aplicacion->url }}</a></td>
                            <td>
                                @can ('ver-aplicacion')
                                    <a class="btn-circle" href="{{ route('aplicaciones.show', $aplicacion->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-aplicacion')
                                    <a class="btn-circle" href="{{ route('aplicaciones.edit', $aplicacion->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-aplicacion')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar esta aplicación?</p>
                                            <form action="{{ route('aplicaciones.destroy', $aplicacion->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

@extends('layouts.panel')

@section('content')
    <div class="container">
        @include('partials.messages')
        @can ('crear-publicacion')
            <a href="{{ route('publicaciones.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir publicación</a>
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
                    @foreach ($publicaciones as $key => $publicacion)
                        <tr>
                            <td>{{ $publicacion->nombre }}</td>
                            <td>{{ $publicacion->descripcion }}</td>
                            <td>
                                <a class="btn-circle" href="{{ route('publicaciones.descargar', $publicacion->id) }}"><i class="fa fa-download"></i></a>
                                @can ('ver-publicacion')
                                    <a class="btn-circle" href="{{ route('publicaciones.show', $publicacion->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-publicacion')
                                    <a class="btn-circle" href="{{ route('publicaciones.edit', $publicacion->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-publicacion')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar esta publicación?</p>
                                            <form action="{{ route('publicaciones.destroy', $publicacion->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

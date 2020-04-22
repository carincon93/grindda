@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-proyecto')
            <a href="{{ route('proyectos.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir proyecto</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Resultado</th>
                        <th>Líder</th>
                        <th>Estado publicación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyectos as $key => $proyecto)
                        <tr>
                            <td>{{ $proyecto->nombre }}</td>
                            <td>{{ $proyecto->resultado }}</td>
                            <td>{{ $proyecto->lider->nombre }}</td>
                            <td>{{ $proyecto->estadoPublicacion }}</td>
                            <td>
                                @can ('ver-proyecto')
                                    <a class="btn-circle" href="{{ route('proyectos.show', $proyecto->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-proyecto')
                                    <a class="btn-circle" href="{{ route('proyectos.edit', $proyecto->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-proyecto')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este proyecto?</p>
                                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

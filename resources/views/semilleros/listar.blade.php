@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-semillero')
            <a href="{{ route('semilleros.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir semillero</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo de semillero</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semilleros as $key => $semillero)
                        <tr>
                            <td>{{ $semillero->nombre }}</td>
                            <td>{{ $semillero->tipoSemillero }}</td>
                            <td>
                                @can ('ver-semillero')
                                    <a class="btn-circle" href="{{ route('semilleros.show', $semillero->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-semillero')
                                    <a class="btn-circle" href="{{ route('semilleros.edit', $semillero->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-semillero')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este semillero?</p>
                                            <form action="{{ route('semilleros.destroy', $semillero->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

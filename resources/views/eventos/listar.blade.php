@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-evento')
            <a href="{{ route('eventos.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir evento</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre del evento</th>
                        <th>Lugar</th>
                        <th>Fechas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventos as $key => $evento)
                        <tr>
                            <td>{{ $evento->nombreEvento }}</td>
                            <td>{{ $evento->lugar }}</td>
                            <td>
                                <p>
                                    Inicio: <span class="fecha">{{ $evento->fechaInicio }}</span>
                                </p>
                                <p>
                                    Fin: <span class="fecha">{{ $evento->fechaFin }}</span>
                                </p>
                            </td>
                            <td>
                                @can ('ver-evento')
                                    <a class="btn-circle" href="{{ route('eventos.show', $evento->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-evento')
                                    <a class="btn-circle" href="{{ route('eventos.edit', $evento->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-evento')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este evento?</p>
                                            <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

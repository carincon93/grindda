@extends('layouts.panel')

@section('content')
    <div class="container">
        @can ('crear-aliado')
            <a href="{{ route('aliados.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir aliado</a>
        @endcan
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Logo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aliados as $key => $aliado)
                        <tr>
                            <td>{{ $aliado->nombre }}</td>
                            <td><img src="{{ Storage::url($aliado->logo) }}" alt="" width="80"></td>
                            <td>
                                @can ('ver-aliado')
                                    <a class="btn-circle" href="{{ route('aliados.show', $aliado->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                @endcan
                                @can ('editar-aliado')
                                    <a class="btn-circle" href="{{ route('aliados.edit', $aliado->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                @endcan
                                @can ('eliminar-aliado')
                                    <div class="dropdown btn-circle">
                                        <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                            <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este aliado?</p>
                                            <form action="{{ route('aliados.destroy', $aliado->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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

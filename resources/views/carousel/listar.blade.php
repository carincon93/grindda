@extends('layouts.panel')

@section('content')
    <div class="container">
        <a href="{{ route('carousel.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir ítem</a>
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carouselItems as $key => $item)
                        <tr>
                            <td>{{ $item->tipo }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>
                                <a class="btn-circle" href="{{ route('carousel.show', $item->id) }}"><i class="far fa-fw fa-eye"></i></a>
                                <a class="btn-circle" href="{{ route('carousel.edit', $item->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>

                                <div class="dropdown btn-circle">
                                    <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-fw fa-trash"></i>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                        <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este ítem?</p>
                                        <form action="{{ route('carousel.destroy', $item->id) }}" method="POST" class="d-block form-destroy dropdown-item">
                                            @method('delete')
                                            @csrf

                                            <button type="submit" class="btn btn-danger d-block w-100">Confirmar</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

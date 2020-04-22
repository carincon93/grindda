@extends('layouts.panel')

@section('content')
    <div class="container">
        <a href="{{ route('fondos.create') }}" class="btn btn-success mt-5"><i class="fa fa-fw fa-plus"></i> Añadir fondo</a>
        <div class="card table-responsive mt-5">
            <table class="table dataTable table-hover">
                <thead>
                    <tr>
                        <th>Fondo de la página principal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fondos as $key => $fondo)
                        <tr>
                            <td><img src="{{ Storage::url($fondo->imagen) }}" alt="" width="50%"></td>
                            <td>
                                <a class="btn-circle" href="{{ route('fondos.create') }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                {{-- <div class="dropdown btn-circle">
                                    <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-fw fa-trash"></i>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                        <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar esta línea de investigación?</p>
                                        <form action="{{ route('lineas_investigacion.destroy', $fondo->id) }}" method="POST" class="d-block form-destroy dropdown-item">
                                            @method('delete')
                                            @csrf

                                            <button type="submit" class="btn btn-danger d-block w-100">Confirmar</button>
                                        </form>
                                    </div>
                                </div> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

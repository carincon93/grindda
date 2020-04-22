@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
            <a href="{{route('roles.index')}}">Volver</a>
                <div class="card">
                    <div class="card-header bg-info"></div>
                    <div class="card-title text-center h2 p-2">
                        {{$rol->nombre}}
                    </div>
                    <div class="card-subtitle mx-auto">
                        {{$rol->descripcion}}
                    </div>
                    <div class="card-body w-75 mx-auto">
                        <table class="table">
                            <thead>
                                <th>Permiso</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($rol->permisos as $key => $permiso)
                                    <tr>
                                        <td>
                                            {{ $key }}
                                        </td>
                                        <td>
                                            <i class="fas fa-check text-success"></i>
                                        </td>
                                    </tr>
                                @endforeach      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.panel')

@section('content')
    <div class="container">
        <a href="{{ route('usuarios.index') }}">Volver</a>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary"></div>
                    <div class="h2 text-center my-2">{{$usuario->nombre}}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="{{Storage::url($usuario->foto)}}" class="img-fluid">
                            </div>
                            <div class="col-12 col-md-6">
                                <table class="table">
                                    <tr>
                                        <td class="font-weight-bold">Nombre</td>
                                        <td>{{$usuario->nombre}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Direccion electronica</td>
                                        <td>{{$usuario->email}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Documento de identidad</td>
                                        <td>{{$usuario->tipoDocumento}} {{$usuario->numeroDocumento}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Tipo vinculacion</td>
                                        <td>{{$usuario->tipoVinculacion}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Profesion</td>
                                        <td>{{$usuario->profesion}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Numero de contacto</td>
                                        <td>{{$usuario->numeroCelular}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Dependencia</td>
                                        <td>{{$usuario->dependencia}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="btn btn-primary btn-block" target="_blank" href="{{$usuario->enlace_CvLac}}">Cvlac</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
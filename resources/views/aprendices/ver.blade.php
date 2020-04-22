@extends('layouts.panel')

@section('content')
<div class="container mt-5 bg-white">
        <a href="{{route('aprendices.index')}}">
        <i class="fas fa-arrow-circle-left"></i>
        volver atrás
        </a>
        <div class="row blockquote text-center">
            <div class="col">
            <div>
                <img src="{{Storage::url($aprendiz->foto)}}" alt="" class="img-fluid">
            </div>
            <a class="" href="{{ route('aprendices.edit', $aprendiz->id) }}"><i class="fas fa-fw fa-pencil-alt"></i>Editar Información</a>
                <h1 class="display-4">{{$aprendiz->nombre}}</h1>
                <table class="table" >
                    <thead>
                        <tr>
                        <th scope="col"> <h3>Datos personales</h3></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Correo Electronico</th>
                            <td>{{$aprendiz->email}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Documento</th>
                            <td>{{$aprendiz->tipoDocumento}}.{{$aprendiz->numeroDocumento}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tipo de vinculación</th>
                            <td>{{$aprendiz->tipoVinculacion}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Número Celular</th>
                            <td>{{$aprendiz->numeroCelular}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Enlace CvLac</th>
                            <td>{{$aprendiz->enlace_CvLac}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Estado</th>
                            <td>{{$aprendiz->estado}}</td>
                        </tr>
                        <tr>
                            <th scope="row">ID Programa de formación</th>
                            <td>{{$aprendiz->programa_formacion_id}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
           
    
        </div>
</div>
@endsection

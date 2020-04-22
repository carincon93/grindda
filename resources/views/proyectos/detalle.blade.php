@extends('layouts.panel')

@section('content')
    <div class="container">
        <a href="{{route('proyectos.index')}}">Volver</a>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{Storage::url($proyecto->imagen)}}" class="img-fluid">
                            </div>
                            <div class="col h-50 my-auto text-center">
                                <p>Estado: {{$proyecto->estadoPublicacion}}</p>
                                <h3>{{$proyecto->nombre}}</h3>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <table class="table">
                                    <tr>
                                        <td class="font-weight-bold">Resultado</td>
                                        <td>{{$proyecto->resultado}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Linea programatica</td>
                                        <td>{{$proyecto->lineaProgramatica}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Fecha creacion</td>
                                        <td>{{$proyecto->fechaCreacion}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Objetivo General</td>
                                        <td>{{$proyecto->objetivoGeneral}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Objetivos especificos</td>
                                        <td>
                                            <ol>
                                                @foreach ($proyecto->objetivosEspecificos as $objetivo)
                                                    @if ($objetivo!="")
                                                        <li>{{$objetivo}}</li>
                                                    @endif
                                                @endforeach
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Lider</td>
                                        <td>{{$proyecto->lider['nombre']}}</td>
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
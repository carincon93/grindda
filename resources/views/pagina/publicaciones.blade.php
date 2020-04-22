@extends('layouts.app')

@push('header')
    <header class="jumbotron jumbotron-publicaciones mt-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div class="container">
            <h1 class="text-left">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 465 465" style="enable-background:new 0 0 465 465; width: 40px; vertical-align: sub;" xml:space="preserve">
                    <g style="&#10;    fill: #8BC34A;&#10;">
                        <path d="M240,356.071V132.12c0-4.143-3.357-7.5-7.5-7.5s-7.5,3.357-7.5,7.5v223.951c0,4.143,3.357,7.5,7.5,7.5   S240,360.214,240,356.071z" style="&#10;    /* fill: black; */&#10;"/>
                        <path d="M457.5,75.782c-15.856,0-35.614-6.842-56.533-14.085c-26.492-9.174-56.521-19.571-87.663-19.571   c-36.035,0-58.019,15.791-70.115,29.038c-4.524,4.956-8.03,9.922-10.688,14.327c-2.658-4.405-6.164-9.371-10.688-14.327   c-12.097-13.247-34.08-29.038-70.115-29.038c-31.143,0-61.171,10.397-87.663,19.571C43.114,68.94,23.356,75.782,7.5,75.782   c-4.143,0-7.5,3.357-7.5,7.5v302.092c0,4.143,3.357,7.5,7.5,7.5c18.38,0,39.297-7.243,61.441-14.911   c25.375-8.786,54.136-18.745,82.755-18.745c24.54,0,44.403,8.126,59.038,24.152c2.792,3.058,7.537,3.273,10.596,0.48   s3.273-7.537,0.48-10.596c-12.097-13.246-34.08-29.037-70.114-29.037c-31.143,0-61.171,10.397-87.663,19.571   C46.298,369.931,29.396,375.782,15,377.422V90.41c16.491-1.571,34.755-7.896,53.941-14.539   c25.375-8.786,54.136-18.745,82.755-18.745c57.881,0,73.025,45.962,73.634,47.894c0.968,3.148,3.876,5.298,7.17,5.298   s6.202-2.149,7.17-5.298c0.146-0.479,15.383-47.894,73.634-47.894c28.619,0,57.38,9.959,82.755,18.745   c19.187,6.644,37.45,12.968,53.941,14.539v287.012c-14.396-1.64-31.298-7.491-49.033-13.633   c-26.492-9.174-56.521-19.571-87.663-19.571c-36.036,0-58.02,15.791-70.115,29.038c-2.793,3.06-2.578,7.803,0.48,10.596   c3.06,2.793,7.804,2.578,10.596-0.48c14.635-16.027,34.498-24.153,59.039-24.153c28.619,0,57.38,9.959,82.755,18.745   c22.145,7.668,43.062,14.911,61.441,14.911c4.143,0,7.5-3.357,7.5-7.5V83.282C465,79.14,461.643,75.782,457.5,75.782z"/>
                        <path d="M457.5,407.874c-15.856,0-35.614-6.842-56.533-14.085c-26.492-9.174-56.521-19.571-87.663-19.571   c-33.843,0-55.291,13.928-67.796,26.596l-26.017-0.001c-12.505-12.668-33.954-26.595-67.795-26.595   c-31.143,0-61.171,10.397-87.663,19.571c-20.919,7.243-40.677,14.085-56.533,14.085c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5   c18.38,0,39.297-7.243,61.441-14.911c25.375-8.786,54.136-18.745,82.755-18.745c24.54,0,44.403,8.126,59.038,24.152   c1.421,1.556,3.431,2.442,5.538,2.442l32.454,0.001c2.107,0,4.117-0.887,5.538-2.442c14.635-16.027,34.498-24.153,59.039-24.153   c28.619,0,57.38,9.959,82.755,18.745c22.145,7.668,43.062,14.911,61.441,14.911c4.143,0,7.5-3.357,7.5-7.5   S461.643,407.874,457.5,407.874z"/>
                    </g>
                </svg>
                @if($tipo_publicacion == 'revista')
                @php $tipo_publicacion = 'revista' @endphp
                <strong class="text-verde">Revistas</strong>
                @elseif($tipo_publicacion == 'boletin')
                @php $tipo_publicacion = 'boletín' @endphp
                <strong class="text-verde">Boletines</strong>
                @elseif($tipo_publicacion == 'libro')
                @php $tipo_publicacion = 'libro' @endphp
                <strong class="text-verde">Libros</strong>
                @elseif($tipo_publicacion == 'articulo')
                @php $tipo_publicacion = 'artículo' @endphp
                <strong class="text-verde">Artículos</strong>
                @endif
            </h1>
        </div>
    </header>
@endpush
@section('content')

    <div class="container py-4">

        @include('partials.messages')

        <!--<p class="text-muted">-->
        <!--    Lista de las publicaciones del grupo de investigación GRINDDA.-->
        <!--</p>-->
        @forelse ($publicaciones as $key => $publicacion)
            <div class="card card-publicaciones">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ Storage::url($publicacion->portada) }}" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <p class="p-4 m-0"><strong>{{ $publicacion->nombre }}</strong></p>
                        {{-- <p class="pl-4 pr-4 pb-2 m-0 text-muted"></p> --}}
                        <p class="pl-4 pr-4 pb-2 m-0 text-justify block-with-text text-muted">
                            {{ $publicacion->descripcion }}
                        <a href="{{ route('publicaciones.descargar', $publicacion->id) }}" class="ml-4 mt-2 btn bg-gold">Descargar {{ $tipo_publicacion }}</a>
                    </div>
                </div>
            </div>
        @empty
            <p>
                No hay publicaciones aún.
            </p>
        @endforelse
    </div>
@endsection

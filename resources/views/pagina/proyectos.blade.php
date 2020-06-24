@extends('layouts.app')

<header style="background: #dde2e2;height: 500px;">
    <div class="row">
        <div class="col" style="padding: 200px;">
            <h1 class="text-center text-white display-4">Proyectos</h1>
            <div style="width: 25px;height: 25px;background:#f60;border-radius:50%;margin-left:300px"></div>
        </div>
    </div>
</header>

@section('content')
    <div class="container my-5">
        @foreach ($proyectos as $proyecto)
            <div class="row my-5">
                <div class="col-5">
                    <img src="{{Storage::url($proyecto->imagen)}}" class="img-fluid">
                </div>
                <div class="col">
                    <h5 class="text-muted">{{$proyecto->nombre}}</h5>
                    <p class="mt-5">{{$proyecto->objetivoGeneral}}</p>
                    <a href="{{route('proyectos-detalle', $proyecto->id)}}" class="btn btn-primary" style="border:none;background: linear-gradient(to right, #f60, #f07e8a);">Mas informacion</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js" defer></script>
    <script src="{{ asset('js/timeline-init.js') }}" charset="utf-8" defer></script>
@endpush

@extends('layouts.app')

@section('content')

    <div class="container py-4">
        <div id='timeline-embed' style="width: 100%; height: 600px"></div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js" defer></script>
    <script src="{{ asset('js/timeline-init.js') }}" charset="utf-8" defer></script>
@endpush

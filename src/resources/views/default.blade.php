<!-- resources/views/simple.blade.php -->
@extends('layouts.app')

@section('title', $title ?? '')

@section('content')

    <div class="nhsuk-grid-row">
        <div class="nhsuk-grid-column-three-quarters">

            <h1 class="header">{{ $title ?? '' }}</h1>

            @yield('content')

        </div>
    </div>

@endsection

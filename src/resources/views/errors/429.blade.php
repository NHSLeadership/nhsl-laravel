@extends('nhsl::nhsl.layouts.nhsl-minimal')

@section('title', __('Too Many Requests'))

@section('content')
    <h1>429</h1>
    <h2>{{ isset($exception) ? $exception->getMessage() : 'Too Many Requests' }}</h2>
    <p>
        Sorry for the inconvenience. If you entered a web address please check it was correct.
    </p>
    <p>
        Please visit our <a href="{{ Route::has('contact-us') ? route('contact-us') : '/contact' }}">contact us</a> page to find help and support information.
    </p>

    @include('nhsl::nhsl.elements.form.back-link')

@endsection

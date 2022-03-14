@extends('nhsl::nhsl.layouts.nhsl-minimal')

@section('title', __('Server Error'))

@section('content')
    <h1>500</h1>
    <h2>{{ isset($exception) ? $exception->getMessage() : 'Server Error' }}</h2>
    <p>
        Sorry for the inconvenience but something went wrong with this service. This error has been logged for future troubleshooting.
    </p>
    <p>
        Please visit our <a href="{{ Route::has('contact-us') ? route('contact-us') : '/contact' }}">contact us</a> page to find help and support information.
    </p>

    @include('nhsl.elements.form.back-link')

@endsection

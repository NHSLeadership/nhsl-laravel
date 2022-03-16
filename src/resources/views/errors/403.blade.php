@extends('nhsl::nhsl.layouts.nhsl-minimal')

@section('title', __('Forbidden'))

@section('content')
    <h1>403</h1>
    <h2>{{ isset($exception) ? $exception->getMessage() : 'Forbidden' }}</h2>
    <p>
        Sorry for the inconvenience. If you entered a web address please check it was correct.
    </p>
    <p>
        Please visit our <a href="{{ Route::has('contact-us') ? route('contact-us') : '/contact' }}">contact us</a> page to find help and support information.
    </p>

    @include('nhsl.elements.form.back-link')

@endsection

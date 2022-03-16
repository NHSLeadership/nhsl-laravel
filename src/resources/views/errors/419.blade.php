@extends('nhsl::nhsl.layouts.nhsl-minimal')

@section('title', __('Page Expired'))

@section('content')
    <h1>419</h1>
    <h2>{{ isset($exception) ? $exception->getMessage() : 'Page Expired' }}</h2>
    <p>
        Sorry for the inconvenience. If you entered a web address please check it was correct.
    </p>
    <p>
        Please visit our <a href="{{ Route::has('contact-us') ? route('contact-us') : '/contact' }}">contact us</a> page to find help and support information.
    </p>

    @include('nhsl::nhsl.elements.form.back-link')

@endsection

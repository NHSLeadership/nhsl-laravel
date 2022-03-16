<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/nhsl.min.css', !\Illuminate\Support\Facades\App::environment('local')) }}">
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.ico', !\Illuminate\Support\Facades\App::environment('local')) }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('media/favicons/apple-touch-icon-180x180.png', !\Illuminate\Support\Facades\App::environment('local')) }}">
    <link rel="mask-icon" href="{{ asset('media/favicons/favicon.svg', !\Illuminate\Support\Facades\App::environment('local')) }}" color="#005eb8">
    <link rel="icon" sizes="192x192" href="{{ asset('media/favicons/favicon-192x192.png', !\Illuminate\Support\Facades\App::environment('local')) }}">
    <livewire:styles />
</head>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('nhsl.elements.head')

<body class="js-enabled">

    @include('nhsl.elements.header')

    @if(Config::get('nhsl.alert_banner_on', true) && (Route::is('home') || Route::is('register') || Route::is('nhsl')))
        @include('nhsl.elements.banner')
    @endif

    <div class="nhsuk-width-container">
        <main class="nhsuk-main-wrapper " id="maincontent" role="main">
            @yield('content')
        </main>
    </div>

    @include('nhsl.elements.footer')

    <script src="{{ asset('js/nhsl.min.js', !\Illuminate\Support\Facades\App::environment('local')) }}" defer></script>

    <livewire:scripts />
    <script>
        document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');
    </script>
</body>

</html>

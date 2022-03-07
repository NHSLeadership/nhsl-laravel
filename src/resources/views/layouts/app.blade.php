<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('nhsuk.front-components::elements.head')

<body class="js-enabled">

@include('nhsuk.front-components::elements.header')

    @if(Config::get('nhsuk.alert_banner_on',false) && (Route::is('home') || Route::is('register')))
        @include('nhsuk.front-components::elements.banner')
    @endif

    <div class="nhsuk-width-container">
        <main class="nhsuk-main-wrapper " id="maincontent" role="main">
            @yield('content')
        </main>
    </div>

    @include('nhsuk.front-components::elements.footer')

    <script src="{{ asset('js/nhsuk.min.js', !\Illuminate\Support\Facades\App::environment('local')) }}" defer></script>
    <script src="{{ asset('js/app.min.js', !\Illuminate\Support\Facades\App::environment('local')) }}" defer></script>

    <livewire:scripts />
    <script>
        document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');
    </script>
</body>

</html>

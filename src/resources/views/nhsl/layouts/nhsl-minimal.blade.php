<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('nhsl::nhsl.elements.head')

<body class="js-enabled">

    @include('nhsl::nhsl.elements.header')

    @if(Config::get('nhsl.alert_banner_on', false) && (Route::is('home') || Route::is('register') || Route::is('nhsl')))
        @include('nhsl::nhsl.elements.banner')
    @endif

    <div class="nhsuk-width-container">
        <main class="nhsuk-main-wrapper " id="maincontent" role="main">
            @yield('content')
        </main>
    </div>

    @include('nhsl::nhsl.elements.footer')

</body>

</html>

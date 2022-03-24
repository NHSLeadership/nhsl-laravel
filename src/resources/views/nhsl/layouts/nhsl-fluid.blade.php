<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('nhsl::nhsl.elements.head')

<body class="js-enabled">

    @include('nhsl::nhsl.elements.header')

    @if(Config::get('nhsl.alert_banner_on', false) && (!Route::is('dashboard')))
        @include('nhsl::nhsl.elements.banner', [
            'title' => 'This is a new service',
            'message' => __('messages.banner.message', ['url' => Config::get('app.user_guide_url','#')]),
        ])
    @endif

    <div class="nhsuk-width-container-fluid">
        <main class="nhsuk-main-wrapper " id="maincontent" role="main">
            @yield('content')
        </main>
    </div>

    @include('nhsl::nhsl.elements.footer')

    <script src="{{ asset('js/nhsl.min.js', !\Illuminate\Support\Facades\App::environment('local')) }}" defer></script>

    <livewire:scripts />
    <script>
        document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');
    </script>
</body>

</html>

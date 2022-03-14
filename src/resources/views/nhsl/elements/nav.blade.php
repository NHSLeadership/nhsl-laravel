<nav class="nhsuk-header__navigation" id="header-navigation" role="navigation" aria-label="Primary navigation" aria-labelledby="label-navigation">

    <div class="nhsuk-width-container">

        <p class="nhsuk-header__navigation-title"><span id="label-navigation">Menu</span>
            <button class="nhsuk-header__navigation-close" id="close-menu">
                <svg class="nhsuk-icon nhsuk-icon__close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M13.41 12l5.3-5.29a1 1 0 1 0-1.42-1.42L12 10.59l-5.29-5.3a1 1 0 0 0-1.42 1.42l5.3 5.29-5.3 5.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l5.29-5.3 5.29 5.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"></path>
                </svg>
                <span class="nhsuk-u-visually-hidden">Close menu</span>
            </button>
        </p>

        <ul class="nhsuk-header__navigation-list">

        @if(Route::is('home'))
            <li class="nhsuk-header__navigation-item nhsuk-header__navigation-item__item--current" aria-current="page">
        @else
            <li class="nhsuk-header__navigation-item">
        @endif
                <a class="nhsuk-header__navigation-link" href="{{ Route::has('home') && route('home') }}">
                    Home
                    <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                    </svg>
                </a>
            </li>

        @if (Auth::check())

            @if(Route::has('programme-dashboard') && Route::is('programme-dashboard*'))
                <li class="nhsuk-header__navigation-item nhsuk-header__navigation-item__item--current" aria-current="page">
            @else
                <li class="nhsuk-header__navigation-item">
                    @endif
                    <a class="nhsuk-header__navigation-link" href="{{ route('programme-dashboard') }}">
                        Programmes
                        <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                        </svg>
                    </a>
                </li>

            @if (Auth::user()->hasPermission('profile:update'))

                @if(Route::has('profile') && Route::is('profile*'))
                    <li class="nhsuk-header__navigation-item nhsuk-header__navigation-item__item--current" aria-current="page">
                @else
                    <li class="nhsuk-header__navigation-item">
                @endif
                    <a class="nhsuk-header__navigation-link" href="{{ route('profile', 'personal-details') }}">
                        Profile
                        <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                        </svg>
                    </a>
                </li>
            @endif

            @if (Auth::user()->hasPermission('users:manage'))
                @if(Route::is('dashboard*'))
                    <li class="nhsuk-header__navigation-item nhsuk-header__navigation-item__item--current" aria-current="page">
                @else
                    <li class="nhsuk-header__navigation-item">
                @endif
                        <a class="nhsuk-header__navigation-link" href="{{ route('dashboard') }}">
                            Dashboard
                            <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                            </svg>
                        </a>
                    </li>
            @endif

            @if (Auth::user()->hasRole('profileman-sysop'))
                @if(Route::has('admin') && Route::is('admin'))
                    <li class="nhsuk-header__navigation-item nhsuk-header__navigation-item__item--current" aria-current="page">
                @else
                    <li class="nhsuk-header__navigation-item">
                @endif
                        <a class="nhsuk-header__navigation-link" href="{{ Route::has('admin') && route('admin') }}">
                            Admin
                            <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                            </svg>
                        </a>
                    </li>
            @endif

            <li class="nhsuk-header__navigation-item">
                <a class="nhsuk-header__navigation-link" href="{{ url('/logout') }}">
                    Logout
                    <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                    </svg>
                </a>
            </li>

        @else
            <li class="nhsuk-header__navigation-item">
                <a class="nhsuk-header__navigation-link" href="{{ Route::has('register') && route('register') }}">
                    Register
                    <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                    </svg>
                </a>
            </li>

            <li class="nhsuk-header__navigation-item">
                <a class="nhsuk-header__navigation-link" href="{{ url('/login') }}">
                    Login<span class="nhsuk-u-visually-hidden"> with academy profile</span>
                    <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                    </svg>
                </a>
            </li>
        @endif

        <li class="nhsuk-header__navigation-item">
            <a class="nhsuk-header__navigation-link" href="{{ Route::has('contact-us') && route('contact-us') }}">
                Contact Us
                <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                </svg>
            </a>
        </li>

        </ul>

    </div>

</nav>

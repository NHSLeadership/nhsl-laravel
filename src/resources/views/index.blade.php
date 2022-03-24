@extends('nhsl::nhsl.layouts.nhsl')

@section('title', $title ?? config('app.name'))

@section('content')

    <div class="nhsuk-grid-row">

        <div class="nhsuk-grid-column-three-quarters">

            <h1 class="header">{{ $title ?? config('app.name', 'NHS Laravel Starter Kit') }}</h1>
            <p>If you already have an Academy Profile, please <a href="{{ Route::has('login') ? route('login') : '' }}">login here</a>.</p>

            <div class="nhsuk-action-link">
                <a class="nhsuk-action-link__link" href="{{ Route::has('login') ? route('login') : '' }}">
                    <svg class="nhsuk-icon nhsuk-icon__arrow-right-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 2a10 10 0 0 0-9.95 9h11.64L9.74 7.05a1 1 0 0 1 1.41-1.41l5.66 5.65a1 1 0 0 1 0 1.42l-5.66 5.65a1 1 0 0 1-1.41 0 1 1 0 0 1 0-1.41L13.69 13H2.05A10 10 0 1 0 12 2z"></path>
                    </svg>
                    <span class="nhsuk-action-link__text">Login <span class="nhsuk-u-visually-hidden"> with academy profile</span></span>
                </a>
            </div>

            <p>Alternatively, you can <a href="{{ config('nhsuk.register_url') }}?callback={{ config('app.url') }}">create a new Academy Profile </a> and come back here when you are verified.</p>
            <div class="nhsuk-action-link">
                <a class="nhsuk-action-link__link" href="http://profile.leadershipacademy.nhs.uk/register">
                    <svg class="nhsuk-icon nhsuk-icon__arrow-right-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 2a10 10 0 0 0-9.95 9h11.64L9.74 7.05a1 1 0 0 1 1.41-1.41l5.66 5.65a1 1 0 0 1 0 1.42l-5.66 5.65a1 1 0 0 1-1.41 0 1 1 0 0 1 0-1.41L13.69 13H2.05A10 10 0 1 0 12 2z"></path>
                    </svg>
                    <span class="nhsuk-action-link__text">Register</span>
                </a>
            </div>

        </div>

    </div>

@endsection

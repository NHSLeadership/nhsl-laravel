@if (!session()->has('message'))
    <div class="nhsuk-u-visually-hidden"></div>
@endif

@if (session()->has('message'))
    <div class="nhsuk-inset-text" aria-labelledby="nhsuk-inset-text" role="message" tabindex="-1">
        <span class="nhsuk-u-visually-hidden" id="inset-text__title">Message: </span>
        <p>{!! session('message') !!}</p>
    </div>
@endif

@if ($errors && count($errors))
    <div class="nhsuk-error-summary" aria-labelledby="error-summary-title" role="alert" tabindex="-1">
        <h2 class="nhsuk-error-summary__title" id="error-summary-title">
            {{ __('headers.generic.error') }} <span class="nhsuk-u-visually-hidden">:</span>
        </h2>
        <div class="nhsuk-error-summary__body">
            <ul>
            @foreach(json_decode($errors) as $error)
                <li>{!! array_shift($error) !!}</li>
            @endforeach
            </ul>
        </div>
    </div>
@endif

@if (session()->has('error'))
    <div class="nhsuk-error-summary" aria-labelledby="error-summary-title" role="alert" tabindex="-1">
        <h2 class="nhsuk-error-summary__title" id="error-summary-title">
            {{ __('headers.generic.error') }} <span class="nhsuk-u-visually-hidden">:</span>
        </h2>
        <div class="nhsuk-error-summary__body">
            <p>{!! session('error') !!}</p>
        </div>
    </div>
@endif

@if (session()->has('warning'))
    <div class="nhsuk-warning-callout" role="warning" tabindex="-1">
        <h3 class="nhsuk-warning-callout__label">
            Warning <span class="nhsuk-u-visually-hidden">:</span>
        </h3>
        <p>{!! session('warning') !!}</p>
    </div>
@endif

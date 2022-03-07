@unlesscookieConsentPreferences
    <div class="nhsuk-cookie-banner " data-nosnippet role="region" aria-label="Cookies on [name of service]">
    <div class="nhsuk-cookie-banner__message nhsuk-width-container">

        <div class="nhsuk-grid-row">
            <div class="nhsuk-grid-column-two-thirds">
                <h2 class="nhsuk-cookie-banner__heading nhsuk-heading-m">Cookies on {{ config('app.name') }}</h2>

                <div class="nhsuk-cookie-banner__content">
                    <p>We use some essential cookies to make this service work.</p>
                    <p>We’d also like to use analytics cookies so we can understand how you use the service and make improvements.</p>
                </div>
            </div>
        </div>

        <div class="nhsuk-button-group">
            <button value="accept" type="button" name="cookies" class="nhsuk-button" data-module="nhsuk-button">
                Accept analytics cookies
            </button>
            <button value="reject" type="button" name="cookies" class="nhsuk-button" data-module="nhsuk-button">
                Reject analytics cookies
            </button>
            <a class="nhsuk-link" href="#">View cookies</a>
        </div>
    </div>
</div>
@endcookieConsentPreferences

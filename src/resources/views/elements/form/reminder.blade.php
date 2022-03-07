<form action="{{ route('remind') }}" method="post" autocomplete="on">

    <fieldset class="nhsuk-fieldset">

        <legend class="nhsuk-fieldset__legend nhsuk-fieldset__legend--l">
            <h1 class="nhsuk-fieldset__heading">
                {{ __('messages.heading.check-my-status') }}
            </h1>
        </legend>

        @component('components.form.dropdown', ['name' => 'programme_id', 'dropdown_list' => $data['programmes'], 'sort' => true])
            @slot('label')
                Programme
            @endslot
            @slot('hint')
                Please select the programme you applied for
            @endslot
        @endcomponent

        @component('components.form.input', ['name' => 'email', 'type' => 'email'])
            @slot('label')
                Email address
            @endslot
            @slot('placeholder')
                yourname@nhs.uk
            @endslot
            @slot('hint')
                Please enter the email address you registered with
            @endslot
        @endcomponent

        <div class="nhsuk-form-group">
            <button class="nhsuk-button" type="submit">
                {{ __('buttons.submit') }}
            </button>
        </div>

        @csrf

    </fieldset>
</form>

@component('components.contact_us', [
])
@endcomponent

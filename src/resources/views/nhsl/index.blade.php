@extends('nhsl.layouts.nhsl')

@section('title', $title ?? '')

@section('content')

    <div class="nhsuk-grid-row">

        <div class="nhsuk-grid-column-full">

            <h1 class="header">{{ $title ?? 'NHS Laravel Starter Kit' }}</h1>

            <p>NHS Laravel Starter Kit is a Laravel framework package for developers based on the <a href="https://service-manual.nhs.uk/design-system/components">NHS Digital service manual components</a> framework.</p>
            <p>NHS Laravel Starter Kit does not restrict the usage of standard NHS.UK frontend library components but extends the functionality of the original framework onto Blade templating making it easy for development. All available examples here will render to the same standards as per NHS service manual.</p>

            <h3>Banner</h3>
            @include('nhsl.elements.banner', [
                'title' => 'This is a banner title',
                'message' => sprintf('<p>Banners can be used in the page <b>header</b> as well as main content and contain custom <span class="nhsuk-tag--green">HTML</span> <span class="nhsuk-tag--pink">elements</span>, <s>text formatting</s> and <a href="%s">URLs</a>.</p>', '#'),
            ])
            <hr>

            <h3>Progress indicator</h3>
            @include('nhsl.elements.form.progress-indicator', [
	            'step' => 1,
	            'setup' => [
	            	'steps' => [
	            		0 => 'Step 1',
	            		1 => 'Step 2',
	            		2 => 'Step 3',
                    ]
                ]
            ])

            @php
                $validator = \Illuminate\Support\Facades\Validator::make([], []);
                $validator->errors()->add('input1', 'This field is required');
                $validator->errors()->add('text1', 'This field is required');
                $validator->errors()->add('checkbox1', 'Please select at least one option');
                $validator->errors()->add('dropdown1', 'Please select one option');
                $validator->errors()->add('radio1', 'Please select one option');
            @endphp

            <form class="nhsuk-form-group">
                <h3>Form input</h3>
                @include('nhsl.components.form.input', [
                    'name' => 'input1',
                    'placeholder' => 'Enter value here',
                    'label' => 'Text label',
                    'hint' => 'This is an additional textarea field hint to describe its purpose',
                    'errors' => $validator->getMessageBag(),
                ])
            </form>

            <form class="nhsuk-form-group">
                <h3>Form textarea</h3>
                @include('nhsl.components.form.textarea', [
                    'name' => 'text1',
                    'placeholder' => 'Enter value here',
                    'label' => 'Input label',
                    'hint' => 'This is an additional textarea field hint to describe its purpose',
                    'errors' => $validator->getMessageBag(),
                ])
            </form>

            <form class="nhsuk-form-group">
                <h3>Form checkboxes</h3>
                @include('nhsl.components.form.checkbox', [
                    'name' => 'checkbox1',
                    'options_list' => [
                        'Option 1',
                    	'Option 2',
                    	'Option 3',
                    ],
                    'label' => 'Checkbox group label',
                    'hint' => 'This is an additional checkbox group hint to describe its purpose',
                    'errors' => $validator->getMessageBag(),
                ])
            </form>

            <form class="nhsuk-form-group">
                <h3>Form dropdown</h3>
                @include('nhsl.components.form.dropdown', [
                    'name' => 'dropdown1',
                    'label' => 'Dropdown label',
                    'dropdown_list' => [
                    	'Option 1',
                    	'Option 2',
                    	'Option 3',
                    ],
                    'hint' => 'This is an additional dropdown hint to describe its purpose',
                    'errors' => $validator->getMessageBag(),
                ])
            </form>

            <form class="nhsuk-form-group">
                <h3>Form radio group</h3>
                @include('nhsl.components.form.radio', [
                    'name' => 'radio1',
                    'label' => 'Radio group label',
                    'options_list' => [
                    	'Option 1',
                    	'Option 2',
                    	'Option 3',
                    ],
                    'hint' => 'This is an additional radio group hint to describe its purpose',
                    'errors' => $validator->getMessageBag(),
                ])
            </form>

            <h3>Back link</h3>
            @include('nhsl.elements.form.back-link', [])
            <hr>

            <h3>Action links (NHS colours supported)</h3>
            @include('nhsl.components.action-link', [
	            'action_url' => '#',
	            'action_colour' => 'blue',
	            'action_text' => 'Call to action 1',
	            'action_text_hidden' => 'Hidden action text',
            ])

            @include('nhsl.components.action-link', [
	            'action_url' => '#',
	            'action_colour' => 'green',
	            'action_text' => 'Call to action 2',
	            'action_text_hidden' => 'Hidden action text',
            ])

            @include('nhsl.components.action-link', [
	            'action_url' => '#',
	            'action_colour' => 'black',
	            'action_text' => 'Call to action 3',
	            'action_text_hidden' => 'Hidden action text',
            ])
            <hr>

            <h3>Card</h3>
            @php
            foreach([401, 403, 404, 419, 429, 500, 503] as $errorCode) {
                $actions[] = [
                    'url' => route('nhsl.errors', $errorCode),
                    'text' => sprintf('HTTP %d page link.', $errorCode),
                ];
            }
            @endphp

            @include('nhsl.components.card', [
	            'card' => [
	            	'heading' => 'Card heading should not be longer than 80 characters for readability',
                    'description' => 'Card description is not limited by design and can be longer text when needed. Additionally we can add call to action or document links below.',
                    'actions' => $actions,
	            ]
            ])
            <hr>

            <h3>Error pages</h3>
            @foreach([401, 403, 404, 419, 429, 500, 503] as $errorCode)
                <p><a class="nhsuk-action-link" href="{{ route('nhsl.errors', $errorCode) }}">HTTP {{$errorCode}} page.</a></p>
            @endforeach

            @yield('content')

        </div>
    </div>

@endsection

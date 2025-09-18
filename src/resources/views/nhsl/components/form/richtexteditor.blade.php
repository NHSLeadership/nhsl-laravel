{{-- Rich text editor component based on Quill.

Notes:

1. This component consists of the Quill JS editor with Alpine
 as described at https://quilljs.com/.

2. Please note that it currently does not support nested data binding using dot notation
 as described at https://laravel-livewire.com/docs/2.x/data-binding#nested-binding.

3. Make sure the "name" parameter matches the field to be edited, e.g:
    @component('nhsl::nhsl.components.form.richtexteditor', ['name' => 'programme_title'])

4. Make sure the "value" slot contains the model->field to be edited, e.g:
    @slot('value')
        {!! $template->programme_title !!}
    @endslot

5. Add an array of listeners to the controller with a listener with
exactly the same name as (3) with "_updated" appended, e.g:
    protected $listeners = [
        'programme_title_updated' => 'updateTitle',
    ];

6. Add a function to the controller that is called by the listener, e.g:
    public function updateTitle($title)
    {
        $this->template->programme_title = urldecode($title);
    }

7. Image/video uploads have been blocked to prevent cross-site-scripting attacks. --}}

<div class="nhsuk-form-group {{ $errors->has($name) ? ' nhsuk-form-group--error' : '' }}">

    @if (isset($label))
        <label class="nhsuk-label" for="{{ $name }}">
            <span>{{ $label }}</span>
        </label>
    @endif

    @if (isset($hint))
        <div class="nhsuk-hint" id="example-hint">
            {{ $hint }}
        </div>
    @endif

    <div name="{{ $name }}" id="{{ $name }}" style="border: 2px solid #4c6272; padding:0; background-color:white;"
        wire:ignore>
        <div x-data x-ref="quillEditor" x-init="quill_{{ $name }} = new Quill($refs.quillEditor, {
            theme: 'snow',
            formats: [
                'background',
                'bold',
                'color',
                'font',
                'italic',
                'link',
                'size',
                'strike',
                'underline',
                'blockquote',
                'header',
                'indent',
                'list',
                'align',
                'direction'
            ]
        });
        quill_{{ $name }}.on('text-change', function() {
            livewire.emit('{{ $name }}_updated', encodeURIComponent(quill_{{ $name }}.root.innerHTML));
        });"
            wire:model.debounce.2000ms="template.{{ $name }}">
            {!! $value !!}
        </div>

        @if (isset($hint))
            <div class="nhsuk-hint" id="{{ $name }}-hint">
                {!! $hint !!}
            </div>
        @endif

        @if (isset($hints) && $hints->has($name))
            <div class="nhsuk-hint" id="{{ $name }}-error-hint">
                {{ $hints->first($name) }}
            </div>
        @endif

        @if ($errors->has($name))
            <span class="nhsuk-error-message" id="{{ $name }}-error">
                <span class="nhsuk-u-visually-hidden">Error:</span>{{ $errors->first($name) }}
            </span>
        @endif
    </div>

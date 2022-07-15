{{-- Rich text editor component based on Quill.

Notes:

1. Make sure the "name" parameter matches the field to be edited, e.g:
    @component('nhsl.components.form.richtexteditor', ['name' => 'programme_title'])

2. Make sure the "value" slot contains the model->field to be edited, e.g:
    @slot('value')
        {!! $template->programme_title !!}
    @endslot

3. Add an array of listeners to the controller with a listener with
exactly the same name as (1) with "_updated" appended, e.g:
    protected $listeners = [
        'programme_title_updated' => 'updateTitle',
    ];

4. Add a function to the controller that is called by the listener, e.g:
    public function updateTitle($title)
    {
        $this->template->programme_title = urldecode($title);
    } --}}

<div class="nhsuk-form-group {{ $errors->has($name) ? ' nhsuk-form-group--error' : '' }}">

    @if (isset($label))
        <label class="nhsuk-label" for="{{ $name }}">
            <span>{{ $label }}</span>
        </label>
    @endif

    @if(isset($hint))
        <div class="nhsuk-hint" id="example-hint">
            {{ $hint }}
        </div>
    @endif

    <div
        name="{{ $name }}"
        id="{{ $name }}"
        style="border:none;padding:0;"
        class="nhsuk-header--white nhsuk-textarea {{ $errors->has($name) ? ' nhsuk-textarea--error' : '' }}"
        wire:ignore>
        <div
            x-data
            x-ref="quillEditor"
            x-init="
                quill_{{ $name }} = new Quill($refs.quillEditor, {theme: 'snow'});
                quill_{{ $name }}.on('text-change', function () {
                    livewire.emit('{{ $name }}_updated', encodeURIComponent(quill_{{ $name }}.root.innerHTML));
                });
            "
            wire:model.debounce.2000ms="template.{{ $name }}"
        >
        {!! $value !!}
    </div>

    @if (isset($hints) && $hints->has($name))
        <div class="nhsuk-hint" id="{{ $name }}-error-hint">
            {{ $hints->first($name) }}
        </div>
    @endif

    @if ($errors->has($name))
        <span class="nhsuk-error-message" id="{{ $name }}-error-error">
          <span class="nhsuk-u-visually-hidden">Error:</span>{{ $errors->first($name) }}
        </span>
    @endif
</div>

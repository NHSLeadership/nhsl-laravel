{{-- Rich text editor component based on Tinymce.

Notes:

1. This component consists of the Tinymce editor with Laravel and composer
 as described at https://www.tiny.cloud/docs/integrations/laravel/laravel-composer-install/.

2. Need to execute 'composer install' followed by 'npx mix' to copy the necessary files to the public folder.

3. Please note that it currently does not support nested data binding using dot notation
 as described at https://laravel-livewire.com/docs/2.x/data-binding#nested-binding.

4. Make sure the "name" parameter matches the field to be edited, e.g:
    @component('nhsl.components.form.tinymce-editor', ['name' => 'programme_title'])

5. Make sure the "value" slot contains the model->field to be edited, e.g:
    @slot('value')
        {!! $template->programme_title !!}
    @endslot

6. Add an array of listeners to the controller with a listener with
exactly the same name as (3) with "_updated" appended, e.g:
    protected $listeners = [
        'programme_title_updated' => 'updateTitle',
    ];

7. Add a function to the controller that is called by the listener, e.g:
    public function updateTitle($title)
    {
        $this->template->programme_title = urldecode($title);
    }

8. Image/video uploads have been blocked to prevent cross-site-scripting attacks. --}}

<div>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        (function() {
            tinymce.init({
                selector: '.nhsuk-tinymce',
                plugins: 'code table lists',
                toolbar: 'undo redo | formatselect| paragraphgroup | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | removeformat | code',
                toolbar_groups: {
                    paragraphgroup: {
                        icon: 'Paragraph',
                        tooltip: 'Heading format',
                        items: 'p h1 h2 h3'
                    }
                },
                promotion: false,
                statusbar: false,
                menubar: false,
                inline: true,
                min_height: 200,
                content_style: '.nhsuk-input-focus { border: 4px solid black; box-shadow: 0 0 0 4px black; } .nhsuk-tinymce { background-color: #ffffff; }',
                setup: function(editor) {
                    editor.on('change', function(e) {
                        Livewire.emit(e.target.id + '_updated', encodeURIComponent(tinymce.activeEditor
                            .getContent()));
                    });
                    editor.on('focus', function(e) {
                        editor.contentAreaContainer.classList.add("nhsuk-input-focus");
                    });
                    editor.on('click', function(e) {
                        editor.contentAreaContainer.classList.add("nhsuk-input-focus");
                    });
                    editor.on('focusout', function(e) {
                        editor.contentAreaContainer.classList.remove("nhsuk-input-focus");
                    });
                }
            });
        })();
    </script>

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
        <div wire:ignore id="{{ $name }}" name="{{ $name }}" class="nhsuk-tinymce nhsuk-textarea">
            {{ $value }}
        </div>
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
</div>

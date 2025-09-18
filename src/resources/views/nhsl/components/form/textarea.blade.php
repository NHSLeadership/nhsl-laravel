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

    <textarea name="{{ $name }}"
            id="{{ $name }}"
            class="nhsuk-textarea {{ $errors->has($name) ? ' nhsuk-textarea--error' : '' }}"
            placeholder="{{ $placeholder ?? '' }}"
            @if (isset($tabindex))
                tabindex="{{ $tabindex }}"
            @endif
            @if (isset($wire))
                @foreach($wire as $wire_type => $wire_name)
                wire:{{ $wire_type }}="{{ $wire_name }}"
                @endforeach
            @else
                wire:model.live="{{ $name }}"
            @endif
            rows="{{ $rows ?? 5 }}"
            aria-describedby="example-hint">{{ old($name) }}</textarea><br/>

</div>

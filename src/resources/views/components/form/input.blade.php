<div class="nhsuk-form-group {{ $class ?? '' }} {{ $errors->has($name) ? ' nhsuk-form-group--error' : '' }}">
    @if (isset($label))
        <label class="nhsuk-label" for="{{ $name }}">
            <span>{{ $label }}</span>
        </label>
    @endif

    <input  name="{{ $name }}"
            id="{{ $name }}"
            class="nhsuk-input {{ $errors->has($name) ? ' nhsuk-input--error' : '' }}"
            type="{{ $type ?? 'text' }}"
            autocomplete="{{ $autocomplete ?? 'on' }}"
            placeholder="{{ $placeholder ?? '' }}"
            @if (isset($tabindex))
                tabindex="{{ $tabindex }}"
            @endif
            @if(isset($wire))
                @foreach($wire as $wire_type => $wire_name)
                wire:{{ $wire_type }}="{{ $wire_name }}"
                @endforeach
            @else
                wire:model="{{ $name }}"
            @endif
            value="{{ $value ?? old($name) }}"><br/>

    @if (isset($hint))
        <span>{!! $hint !!}</span>
    @endif

    @if (isset($hints) && $hints->has($name))
        <div class="nhsuk-hint" id="{{ $name }}-error-hint">
            {!! $hints->first($name) !!}
        </div>
    @endif

    @if ($errors->has($name))
        <span class="nhsuk-error-message" id="{{ $name }}-error-error">
          <span class="nhsuk-u-visually-hidden">Error:</span>{!! $errors->first($name) !!}
        </span>
    @endif
</div>

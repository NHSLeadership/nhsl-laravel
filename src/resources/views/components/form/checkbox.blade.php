<div class="nhsuk-form-group {{ $errors->has($name) ? ' nhsuk-form-group--error' : '' }}">

    @if (isset($options_list) && isset($label))
        <legend class="nhsuk-fieldset__legend nhsuk-fieldset__legend--l">
            <h1 class="nhsuk-fieldset__heading">
                {{ $label }}
            </h1>
        </legend>
    @endif

    @if (isset($hint))
        <div class="nhsuk-hint" id="{{$name}}-hint">
            {{ $hint }}
        </div>
    @endif

    <div class="nhsuk-checkboxes">
        @php $options_list = isset($options_list) ? $options_list :[ 1 => $name ] @endphp
        @if (is_array($options_list) && !empty($sort))
            <?php asort($options_list);?>
        @endif
        @foreach ($options_list as $param_id => $param_name)
            <div class="nhsuk-checkboxes__item">
                <input name="{{ $name }}[{{ $param_id }}]" id="{{ $name }}-{{ $param_id }}"
                @if(isset($wire))
                    @foreach($wire as $wire_type => $wire_name)
                    wire:{{ $wire_type }}="{{ $wire_name }}"
                    @endforeach
                @else
                    wire:model="{{ $name }}.{{ $param_id }}"
                @endif
                @if (isset($tabindex) && $param_id === array_key_first($options_list))
                    tabindex="{{ $tabindex }}"
                @endif
                value="{{ $param_id }}"
                class="nhsuk-checkboxes__input"
                type="checkbox">
                <label class="nhsuk-label nhsuk-checkboxes__label" for="{{ $name }}-{{ $param_id }}">
                    <span>{{ count($options_list)>1 ? $param_name : $label }}</span>
                </label>
            </div>
        @endforeach

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
</div>

<div class="nhsuk-form-group {{ $errors->has($name) ? ' nhsuk-form-group--error' : '' }}">

    @if (isset($label))
        <label class="nhsuk-label" for="{{ $name }}">
            <span>{{ $label }}</span>
        </label>
    @endif

    <select name="{{ $name }}" id="{{ $name }}"
        @if(isset($wire))
            @foreach($wire as $wire_type => $wire_name)
            wire:{{ $wire_type }}="{{ $wire_name }}"
            @endforeach
        @else
            wire:model="{{ $name }}"
        @endif
        @if (isset($tabindex))
            tabindex="{{ $tabindex }}"
        @endif
        class="nhsuk-select">
        <option value="">{{ $placeholder ?? '-- Please select --' }}</option>
        @if (isset($dropdown_list) && is_array($dropdown_list))

            @if (!empty($sort))
                @php asort($dropdown_list); @endphp
            @endif

            @foreach ($dropdown_list as $param_value => $param_name)
                <?php $selected = null ?>
                <option value="{{ $param_value }}" {{ $selected }}>{{ $param_name }}</option>
            @endforeach

        @endif
    </select>

    @if (isset($hint))
        <div class="nhsuk-hint">{!! $hint !!}</div>
    @endif

    @if (isset($hints) && $hints->has($name))
        <div class="nhsuk-hint" id="{{ $name }}-error-hint">
            {!! $hints->first($name) !!}
        </div>
    @endif

    @if ($errors->has($name))
        <span class="nhsuk-error-message" id="{{ $name }}-error">
          <span class="nhsuk-u-visually-hidden">Error:</span>{{ $errors->first($name) }}
        </span>
    @endif
</div>

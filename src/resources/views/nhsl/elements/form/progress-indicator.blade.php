@if (isset($setup['steps']))
    <nav class="nhsuk-breadcrumb nhsuk-u-margin-bottom-4" aria-label="Progress-indicator">
        <div class="nhsuk-width-container">
            @if (count($setup['steps']))
            <ol class="nhsuk-breadcrumb__list nhsuk-u-padding-left-4">
                @foreach($setup['steps'] as $stepId => $stepName)
                    <li class="nhsuk-breadcrumb__item @if ($step >= $stepId) nhsuk-contents-list__current @endif">
                        <span class="nhsuk-breadcrumb__link">{{$stepName}}</span>
                    </li>
                @endforeach
            </ol>
            @endif
        </div>
    </nav>
@endif

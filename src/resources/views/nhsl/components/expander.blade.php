{{--Expander component--}}
<div>
    @if (!empty($card['actions']) && empty($promptCookie))
        <details class="nhsuk-details nhsuk-expander">
            <summary class="nhsuk-details__summary">
                <span class="nhsuk-details__summary-text">
                    {{$card['heading'] ?? ''}}
                </span>
                @if ($showRemindLaterLink ?? false)
                    <a href="#" class="nhsuk-header__content" wire:click="remindLater">Remind me later</a>
                @endif
            </summary>
            <div class="nhsuk-details__text">
                <p class="nhsuk-card__description">{{ $card['description'] ?? '' }}</p>
                @if ($card['actions'] ?? false)
                    <ul>
                        @foreach($card['actions'] as $action)
                            <li>
                                <a class="nhsuk-action-link" href="{{$action['url'] ?? ''}}">{{$action['text'] ?? ''}}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </details>
    @endif
</div>

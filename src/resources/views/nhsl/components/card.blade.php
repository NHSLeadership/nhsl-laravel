{{--Card component--}}
<div class="nhsuk-card">
    <div class="nhsuk-card__content">
        <h2 class="nhsuk-card__heading nhsuk-heading-s">
            {{ $card['heading'] ?? '' }}
        </h2>
        <p class="nhsuk-card__description">{!! $card['description'] ?? '' !!}</p>
        @if ($card['actions'] ?? false)
            <ul>
            @foreach($card['actions'] as $action)
                <li><a class="nhsuk-action-link" href="{{$action['url'] ?? ''}}">{{$action['text'] ?? ''}}</a></li>
            @endforeach
            </ul>
        @endif
    </div>
</div>

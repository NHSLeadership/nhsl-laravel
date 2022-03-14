<div class="nhsuk-summary-list">
    @if ($cohorts ?? false)
        @foreach ($cohorts as $cohort)
            <div class="nhsuk-summary-list__row">
                <dt class="nhsuk-summary-list__value">
                    <a href="{{ route('dashboard-cohort-details', $cohort['id']) }}">{{ $cohort['name'] }} ({{ $cohort['programme']['name'] }})</a>
                </dt>
                <dd class="nhsuk-summary-list__actions">
                    @if (!empty($user_id) && isset($cohort['users']) && empty($dont_show_action_links))
                        @if (in_array($user_id, array_column($cohort['users'], 'id')))
                            <a href="#"
                                onclick="confirm('Are you sure you want to unassign {{ $cohort['name'] }} from this user?') || event.stopImmediatePropagation()"
                                wire:click.prevent="unassignCohort({{$cohort['id']}})">Unassign</a>
                        @else
                            <a href="#" wire:click.prevent="assignCohort({{$cohort['id']}})">Assign</a>
                        @endif
                    @endif
                </dd>
            </div>
        @endforeach
    @else
        No cohorts assigned
    @endif
</div>

<div
    @if($eventClickEnabled)
        wire:click.stop="onEventClick('{{ $event['id']  }}')"
    @endif
    class="bg-white rounded-lg border py-2 px-3 shadow-md cursor-pointer">

    <p class="text-sm font-medium">
        {{ $event['title'] }}
    </p>
    <p class="mt-0 text-xs">
        @if(isset($event['start_time']) && isset($event['end_time']))
            {{$event['start_time']}} - {{$event['end_time']}}
        @endif
    </p>
    <p class="mt-2 text-xs">
        {{ $event['description'] ?? 'No description' }}
    </p>
</div>

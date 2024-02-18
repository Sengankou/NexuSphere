<div>
    <ul drag-root="reorder" class="overflow-hidden rounded">
        @foreach ($things as $thing)
            <li drag-item="{{ $thing['id'] }}" draggable="true" wire:key="{{ $thing['id']}}" class="my-1 px-4 border">
                {{ $thing['name'] }}
            </li>
        @endforeach
    </ul>
</div>

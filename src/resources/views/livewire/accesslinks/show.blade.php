<div class="flex flex-wrap justify-center items-center m-2 py-1 rounded-lg bg-slate-900/50 ring-1 inset-0">
    @foreach ($accesslinks as $accesslink)
        <div class="relative my-2">
            <a href={{ $accesslink->url }} target="_blank" class="block">
                <div class="flex justify-center items-center p-3 mx-2 h-10 rounded bg-slate-900 hover:bg-blue-800 text-white hover:text-red-300 border-y-2 border-slate-100 hover:border-red-300" wire:key="{{ $accesslink->id }}">
                    <img class="favicon w-4 h-4" src="{{ $favicon_urls["$accesslink->id"] }}" >
                    <p class="m-1 text-xl">{{ $accesslink->name }}</p>
                </div>
            </a>
            @if ($link_editing === true)
                <button class="" wire:click="delete({{ $accesslink->id }})">
                    <x-delete-logo2 class="absolute -top-2 -right-1 h-7 p-0 fill-current text-red-300 hover:text-red-600" />
                </button>
            @endif
        </div>
    @endforeach
</div>
{{-- <button class="h-5 w-auto ml-auto" wire:click="delete({{ $subcategory->id }})">
    <x-delete-logo2 class="mx-0.5 my-1 p-0 w-auto h-5 fill-current text-red-300 hover:text-red-600" />
</button> --}}

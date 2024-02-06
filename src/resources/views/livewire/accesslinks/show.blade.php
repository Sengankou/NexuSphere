<div class="flex flex-wrap justify-center items-center my-2 py-1 bg-slate-700">
    @foreach ($accesslinks as $accesslink)
        <a href={{ $accesslink->url }} target="_blank" class="my-2">
            <div class="flex justify-center items-center p-3 mx-2 h-10 rounded bg-slate-900 hover:bg-black text-white hover:text-red-300" wire:key="{{ $accesslink->id }}">
                <img class="favicon w-4 h-4" src="{{ $favicon_urls["$accesslink->id"] }}" >
                <p class="m-1 text-xl">{{ $accesslink->name }}</p>
            </div>
        </a>
    @endforeach
</div>

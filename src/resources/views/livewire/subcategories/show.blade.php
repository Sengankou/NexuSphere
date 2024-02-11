
<div class="text-white">
    <div class="m-0 p-0">
        <ul class="m-0">
            @foreach ( $subcategories as $subcategory)
                <li class="my-2 px-3 py-1 bg-indigo-800/40 overflow-hidden shadow-none sm:rounded-lg ring-2 ring-inset ring-blue-300/60">
                    <div class="flex">
                        <h3 class="text-xl font-medium">
                            {{ $subcategory->name }}
                        </h3>
                        @if ($link_editing[$subcategory->id] === false)
                            <button class="h-5 w-auto ml-2" wire:click="toggleShow({{ $subcategory->id }})">
                                <x-edit-logo class="m-0.5 p-0 w-auto h-auto fill-current text-slate-300 hover:text-red-400 rounded border border-slate-300 hover:border-red-400" />
                            </button>
                        @endif
                        @if ($link_editing[$subcategory->id] === true)
                            <button class="h-5 w-auto ml-2" wire:click="toggleShow({{ $subcategory->id }})">
                                <x-delete-logo2 class="mx-0.5 my-1 p-0 w-auto h-5 fill-current text-red-400 hover:text-slate-200" />
                            </button>
                        @endif
                    </div>

                    <livewire:accesslinks.show :subcategory_id="$subcategory->id" :wire:key="'accesslinks-create-'.$subcategory->id" />

                    @if ($link_editing[$subcategory->id] === true)
                        <livewire:accesslinks.create :subcategory_id="$subcategory->id" />
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>

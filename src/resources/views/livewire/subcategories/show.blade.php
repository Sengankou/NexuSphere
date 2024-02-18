
<div class="text-white">
    <div class="m-0 p-0">
        <ul sub-drag-root="reorder" class="m-0">
            @foreach ( $subcategories as $subcategory)
                <li sub-drag-item="{{ $subcategory->id }}" draggable="true" wire:key="{{ $subcategory->id }}" class="my-2 px-3 py-1 bg-indigo-800/40 overflow-hidden shadow-none sm:rounded-lg ring-2 ring-inset ring-blue-300/60">
                    <div class="flex">
                        <h3 class="text-xl font-medium ">
                            {{ $subcategory->name }}
                        </h3>
                        {{-- <p class="text-xl font-medium"> 　{{ $subcategory->display_order }} </p> --}}
                        @if ($link_editing[$subcategory->id] === false)
                            <button class="h-5 w-auto ml-3 my-auto" wire:click="editActivate({{ $subcategory->id }})">
                                <x-edit-logo class="m-0.5 p-0 w-auto h-auto fill-current text-slate-300 hover:text-red-400 rounded border border-slate-300 hover:border-red-400" />
                            </button>
                        @endif
                        @if ($link_editing[$subcategory->id] === true)
                            <button class="h-5 w-auto mx-2 my-1 px-1 fill-current text-sm bg-black text-red-400 hover:text-slate-200 border border-red-400 hover:border-slate-200 rounded" wire:click="editDeactivate({{ $subcategory->id }})">
                                完了
                            </button>
                            <button class="h-5 w-auto ml-auto" wire:click="delete({{ $subcategory->id }})">
                                <x-delete-logo2 class="mx-0.5 my-1 p-0 w-auto h-5 fill-current text-red-300 hover:text-red-600" />
                            </button>
                        @endif
                    </div>

                    <livewire:accesslinks.show :subcategory_id="$subcategory->id" :link_editing="$link_editing[$subcategory->id]" :wire:key="'subcategory-accesslinks-'.$subcategory->id" />

                    @if ($link_editing[$subcategory->id] === true)
                        <livewire:accesslinks.create :subcategory_id="$subcategory->id" />
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>


<div class="text-white">
    <div class="m-0 p-0">
        <ul class="m-0">
            @foreach ( $subcategories as $subcategory)
                <li x-data="{ open: false }" class="my-2 px-3 py-1 bg-indigo-800/40 overflow-hidden shadow-none sm:rounded-lg ring-2 ring-inset ring-blue-300/60">
                    <div class="flex">
                        <h3 class="text-xl font-medium">
                            {{ $subcategory->name }}
                        </h3>
                        <div x-show="!open" class="h-5 w-auto ml-2">
                            <button @click="open = true" class="">
                                <x-edit-logo class="m-0.5 p-0 w-auto h-auto fill-current text-slate-300 hover:text-red-400 rounded border border-slate-300 hover:border-red-400" />
                            </button>
                        </div>
                        <div x-show="open" class="h-5 w-auto ml-2">
                            <button @click="open = false" class="">
                                <x-delete-logo2 class="mx-0.5 my-1 p-0 w-auto h-5 fill-current text-red-400 hover:text-slate-200" />
                                {{-- <x-cancel-logo class="m-0.5 p-0 w-auto h-auto fill-current text-slate-300 hover:text-red-400 rounded border border-slate-300 hover:border-red-400" /> --}}
                            </button>
                        </div>
                    </div>
                    <livewire:accesslinks.show :subcategory_id="$subcategory->id"/>
                    <div x-show="open" @click.outside="open = false">
                        <livewire:accesslinks.create :subcategory_id="$subcategory->id" />
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>


<div class="text-white">
    <div class="m-0 p-0">
        <ul class="m-0">
            @foreach ( $subcategories as $subcategory)
                <li class="my-2 px-3 py-1 bg-indigo-800/40 overflow-hidden shadow-none sm:rounded-lg ring-2 ring-inset ring-blue-300/60">
                    <div>
                        <h3 class="text-xl font-medium">
                            {{ $subcategory->name }}
                        </h3>
                    </div>
                    <livewire:accesslinks.show :subcategory_id="$subcategory->id"/>
                    <livewire:accesslinks.create :subcategory_id="$subcategory->id" />
                </li>
            @endforeach
        </ul>
    </div>
</div>

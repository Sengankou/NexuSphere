
<div class="text-white">
    <div class="m-0 p-0">
        <ul class="m-0">
            @foreach ( $subcategories as $subcategory)
                <li class="my-2 px-3 py-1 bg-slate-800 rounded-md">
                    <div>
                        <h3 class="text-lg font-semibold">
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

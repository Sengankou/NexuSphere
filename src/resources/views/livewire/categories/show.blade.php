<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            {{ $category->name }}
        </h2>
    </x-slot>


    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:subcategories.show :category_id="$category->id" />
            <livewire:subcategories.create :category_id="$category->id" />
            {{ $category->id }}
        </div>
    </div>

    {{-- <script>
        let root = document.querySelector('[sub-drag-root]');

        root.querySelectorAll('[sub-drag-item]').forEach(el => {
            el.addEventListener('dragstart', e => {
                e.target.setAttribute('dragging', true);
                console.log('start');
            });
            el.addEventListener('dragenter', e => {
                e.target.classList.add('bg-yellow-900');
                console.log('enter');
            });
            el.addEventListener('dragleave', e => {
                e.target.classList.remove('bg-yellow-900');
                console.log('leave');
            });
            el.addEventListener('dragdrop', e => {
                console.log('drop');
                e.target.classList.remove('bg-yellow-900');
            });
        });
    </script> --}}
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
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
</x-app-layout>

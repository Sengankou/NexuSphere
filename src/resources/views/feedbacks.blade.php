<x-app-layout>
    <x-slot name="header">
        <h2 class="font-medium text-2xl text-white leading-tight">
            {{ __('Feedbacks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset p-4 mb-6">
                <div class="text-xl px-10 py-2 text-white">
                    {{ __("Feedbacks") }}
                    <livewire:feedbacks.create />
                    <livewire:feedbacks.show />
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

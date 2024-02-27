<x-app-layout>
    <x-slot name="header">
        <h2 class="font-medium text-2xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('updates') }}">
                <div class="text-white hover:text-red-300 bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset p-4 mb-6">
                    <div class="text-xl px-10 py-2">
                        {{ __("Updates") }}
                    </div>
                </div>
            </a>
            <a href="{{ route('feedbacks') }}">
                <div class="text-white hover:text-red-300 bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset p-4 mb-4">
                    <div class="text-xl px-10 py-2">
                        {{ __("Feedbacks") }}
                    </div>
                </div>
            </a>
            {{-- <div class="bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset">
                <h1 x-data="{ message: 'I love Alpine!'}" x-text="message" class="p-6 text-white"></h1>
            </div>
            <div x-data="{count: 0}" class="bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset text-white p-4">
                <button class="rounded border-2 bg-blue-500 border-red-500 p-1" x-on:click="count++">Increment</button>
                <span x-text="count*3"></span>
            </div>
            <div x-data="{open: false}" class="bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset text-white p-4">
                <button @click="open = ! open" class="rounded border-2 bg-blue-500 border-red-500 p-1">Toggle</button>
                <div x-show="open" @click.outside="open = false" class="bg-red-500 p-2">Content</div>
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset text-white p-4">
                <livewire:things />
            </div> --}}
        </div>
    </div>

    {{-- @livewireScripts
    <script>
        let root = document.querySelector('[drag-root]');

        root.querySelectorAll('[drag-item]').forEach(el => {
            el.addEventListener('dragstart', e => {
                // console.log('start')
                e.target.setAttribute('dragging', true);
                // e.dataTransfer.setData('text/plain', '#the-id');
            });
            el.addEventListener('drop', e => {
                console.log('drop')
                e.target.classList.remove('bg-yellow-900')
                // get the dragging element
                let draggingEl = root.querySelector('[dragging]');
                // insert it before the drop target
                e.target.before(draggingEl);

                // Refresh the livewire component
                let component = Livewire.find(
                    e.target.closest('[wire\\:id]').getAttribute('wire:id')
                )

                let orderIds = Array.from(root.querySelectorAll('[drag-item]'))
                    .map(itemEl => itemEl.getAttribute('drag-item'));

                let method = root.getAttribute('drag-root');

                component.call(method, orderIds);
            });
            el.addEventListener('dragenter', e => {
                e.target.classList.add('bg-yellow-900')

                e.preventDefault();
            });
            el.addEventListener('dragover', e => {
                e.preventDefault();
            });
            el.addEventListener('dragleave', e => {
                e.target.classList.remove('bg-yellow-900')
                console.log('leave')
            });
            el.addEventListener('dragend', e => {
                // console.log('end')
                e.target.removeAttribute('dragging');
            });
        });
    </script> --}}

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-medium text-2xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset">
                <div class="p-6 text-white">
                    {{ __("Hello") }}
                </div>
            </div>
            <div class="bg-slate-800/50 overflow-hidden shadow-none sm:rounded-lg bg-gradient-to-bl from-slate-700/50 ring-1 ring-inset">
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
        </div>
    </div>
</x-app-layout>

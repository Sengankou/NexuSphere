<div>
    <form wire:submit="update">
        <textarea
            wire:model="message"
            class="block w-full h-24 px-3 py-2 text-slate-200 placeholder-slate-400 bg-slate-900 border border-slate-700 rounded-md focus:outline-none focus:ring focus:ring-red-300 focus:border-red-300"
        ></textarea>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <div class="flex mt-4">
            <x-primary-button class="ml-auto px-2">{{ __('Save') }}</x-primary-button>
            <button class="mx-2 hover:text-indigo-400" wire:click.prevent="cancel">Cancel</button>
        </div>
    </form>
</div>

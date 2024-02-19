<div>
    <form wire:submit="store" class="">
        <textarea
            wire:model="message"
            placeholder="{{ __('What\'s on your mind?')}}"
            class="w-full placeholder:italic placeholder:text-slate-300 block text-white bg-slate-800 border-slate-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        ></textarea>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <div class="flex">
            <x-primary-button class="ml-auto my-1 w-3/12 text-center py-2 px-4">{{ __('Submit') }}</x-primary-button>
        </div>
    </form>
</div>

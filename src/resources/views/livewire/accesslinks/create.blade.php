<div class="pt-2 pb-3">
    <form wire:submit="store">
        <div class="flex justify-evenly h-8">
            <input
            wire:model="name"
            placeholder="{{ __('site name') }}"
            type="text"
            class="placeholder:italic placeholder:text-slate-300 block h-8 w-5/12 text-white bg-slate-800 border-slate-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >
        <input
            wire:model="url"
            placeholder="{{ __('URL') }}"
            type="text"
            class="placeholder:italic placeholder:text-slate-300 block w-5/12 text-white bg-slate-800 border-slate-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >
        <x-primary-button class="m-0 h-8">{{ __('＋') }}</x-primary-button>
        </div>

    </form>
</div>

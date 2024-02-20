<div class="">
    <form wire:submit="store">
        <div class="flex justify-evenly items-center h-8 my-5 mx-16" >
            <input class="w-8/12 placeholder:italic placeholder:text-slate-300 block text-white bg-slate-800 border-slate-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="new subcategory" type="text" wire:model="name">
            <x-primary-button class="my-1 w-3/12 text-center py-2 px-4">{{ __('+') }}</x-primary-button>
        </div>
    </form>
</div>

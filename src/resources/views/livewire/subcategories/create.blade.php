<div class="">
    <form wire:submit="store">
        <div class="flex justify-evenly items-center h-8 my-5" >
            <input class="rounded w-10/12" placeholder="new subcategory" type="text" wire:model="name">
            <x-primary-button class="m-1">{{ __('追加') }}</x-primary-button>
        </div>
    </form>
</div>

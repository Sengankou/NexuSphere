<div class="inline-flex items-center px-1 pt-1">
    <button wire:click="openModal()" type="button" class="ml-2 mb-1 w-auto">
        <x-edit-logo class="m-0.5 p-0 w-auto h-auto fill-current text-slate-300 hover:text-red-400 rounded border border-slate-300 hover:border-red-400" />
    </button>

    @if ($modalVisibility)
        <div class="fixed z-10 inset-0 overflow-auto modal-container">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-slate-400 bg-opacity-60 transition-opacity"></div>

                <div class="inline-block align-bottom bg-slate-700 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-slate-900 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h3 class="text-white leading-6 font-medium ">
                            カテゴリの編集
                        </h3>
                        <div class="mt-2 mx-10">
                            <p class="text-slate-200"> display_order: {{ $display_order }} </p>
                            <ol class="">
                                @foreach ( $categories as $category)
                                    <li class="my-2 p-1 flex rounded border ">
                                        <p class="text-base text-slate-200">
                                            　{{ $category->name }} / id:{{ $category->id }} / {{ $category->display_order}}
                                        </p>
                                        <x-delete-logo2 wire:click="deleteCategory({{ $category->id }})" class="ml-auto p-0 w-5 h-5 fill-current text-red-300 hover:text-red-600" />
                                    </li>
                                @endforeach
                                <li class="mt-2">
                                    <form wire:submit="storeCategory">
                                        <div class="flex justify-evenly items-center" >
                                            <input class="placeholder:italic h-8 w-8/12 placeholder:text-slate-300 block text-white bg-slate-800 border-slate-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="new category" type="text" wire:model="name">
                                            <x-primary-button class="h-8 w-3/12 text-center">{{ __('+') }}</x-primary-button>
                                        </div>
                                    </form>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="bg-slate-700 mx-4 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <x-primary-button wire:click="closeModal()" type="button" class="mt-2 w-full inline-flex justify-center rounded-md border px-4 py-2 text-base font-medium text-gray-700">
                            閉じる
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>

<script>
    document.addEventListener('keydown', function(event) {
        if(event.key === "Escape") {
            @this.closeModal();
        }
    });
</script>
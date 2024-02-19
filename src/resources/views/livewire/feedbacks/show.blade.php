<div class="text-white m-0 p-0">
    <ul class="m-0">
        @foreach ( $feedbacks as $feedback)
            <li wire:key="{{ $feedback->id }}" class="my-2 px-3 py-3 bg-slate-900/50 overflow-hidden shadow-none sm:rounded-lg ring-2 ring-inset ring-blue-300/60">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="ml-3">
                        <span class="text-base text-slate-200">{{ $feedback->user->name }}</span>
                        <small class="ml-2 text-slate-300">{{ $feedback->created_at->format('Y/m/d  H:i') }}</small>
                        @unless ($feedback->created_at->eq($feedback->updated_at))
                            <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                        @endunless
                    </div>
                    <div class="ml-auto">
                        @if ($feedback->user->is(auth()->user()))
                            <x-dropdown class="">
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link wire:click="edit({{ $feedback->id }})">
                                        {{ __('Edit') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        @endif
                    </div>
                </div>

                @if ($feedback->is($editing))
                    <livewire:feedbacks.edit :feedback="$feedback" :key="$feedback->id" />
                @else
                    <p class="px-6 py-3 text-lg ">{{ $feedback->message }}</p>
                @endif

            </li>
        @endforeach
    </ul>
</div>

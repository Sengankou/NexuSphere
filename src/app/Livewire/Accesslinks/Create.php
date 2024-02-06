<?php

namespace App\Livewire\Accesslinks;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Accesslink;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    #[Rule('required|integer|min:1')]
    public $subcategory_id;
    #[Rule('required|string|max:255')]
    public string $name = '';
    #[Rule('required|string|max:2048')]
    public string $url = '';
    #[Rule('required|integer|min:0')]
    public $display_order = 0;
    #[Rule('required|boolean')]
    public bool $favorite = false;

    public function mount($subcategory_id): void
    {
        $this->subcategory_id = $subcategory_id;
        $this->display_order = AccessLink::whereHas('subcategory', function ($query) {
            $query->where('id', $this->subcategory_id);
        })->max('display_order') + 1;
    }

    public function store(): void
    {
        Log::debug('store');
        $validated = $this->validate();
        auth()->user()->accesslinks()->create($validated);

        $this->name = '';
        $this->url = '';
        $this->display_order++;

        $this->dispatch('accesslink-created');
    }

    public function render()
    {
        return view('livewire.accesslinks.create');
    }
}

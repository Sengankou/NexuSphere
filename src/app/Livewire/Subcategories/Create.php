<?php

namespace App\Livewire\Subcategories;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    #[Rule('required|string|max:255')]
    public string $name = '';
    #[Rule('required|integer|min:1')]
    public $category_id;
    #[Rule('required|integer|min:0')]
    public $display_order = 0;

    public function mount($category_id)
    {
        $this->category_id = $category_id;
        $this->display_order = Subcategory::whereHas('category', function ($query) {
            $query->where('id', $this->category_id);
        })->max('display_order') + 1;
    }

    public function store()
    {
        $validated = $this->validate();
        Subcategory::create($validated);

        $this->name = '';
        $this->display_order++;

        $this->dispatch('subcategory-created');
    }


    public function render()
    {
        return view('livewire.subcategories.create');
    }
}

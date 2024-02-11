<?php

namespace App\Livewire\Subcategories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\On;

class Show extends Component
{
    public $category_id;
    public Collection $subcategories;
    public $link_editing = [];

    public function mount($category_id)
    {
        $this->category_id = $category_id;
        $this->subcategories = Subcategory::whereHas('category', function ($query) {
            $query->where('id', $this->category_id);
        })->get();
        foreach ($this->subcategories as $subcategory) {
            $this->link_editing[$subcategory->id] = false;
        }
    }

    #[On('subcategory-created')]
    public function refreshSubcategories()
    {
        $this->subcategories = $this->subcategories->fresh();
    }

    public function toggleShow($id)
    {
        $this->link_editing[$id] = !$this->link_editing[$id];
        Log::debug('Link editing state:', $this->link_editing);
    }

    public function render()
    {
        return view('livewire.subcategories.show');
    }
}

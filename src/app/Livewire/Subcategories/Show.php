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

    public function mount($category_id)
    {
        $this->category_id = $category_id;
        $this->subcategories = Subcategory::whereHas('category', function ($query) {
            $query->where('id', $this->category_id);
        })->get();
    }

    #[On('subcategory-created')]
    public function refreshSubcategories()
    {
        $this->subcategories = $this->subcategories->fresh();
    }

    public function render()
    {
        return view('livewire.subcategories.show');
    }
}

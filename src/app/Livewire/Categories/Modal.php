<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Rule;

class Modal extends Component
{
    public $modalVisibility = false;
    public Collection $categories;

    #[Rule('required|string|max:255')]
    public $name = '';
    #[Rule('required|integer|min:0')]
    public $display_order = 0;

    public function mount()
    {
        $this->refreshCategories();
        $this->display_order = Category::where('user_id', \Auth::user()->id)->max('display_order') + 1;
    }

    public function refreshCategories()
    {
        $this->categories = Category::where('user_id', \Auth::user()->id)->orderBy('display_order', 'asc')
        ->get();
    }

    public function openModal()
    {
        $this->modalVisibility = true;
    }

    public function closeModal()
    {
        $this->modalVisibility = false;
    }

    public function deleteCategory($id)
    {
        Category::find($id)->delete();
        $this->refreshCategories();
    }

    public function storeCategory()
    {
        $validated = $this->validate();

        auth()->user()->categories()->create($validated);

        $this->name = '';
        $this->display_order++;
        $this->refreshCategories();
    }

    public function render()
    {
        return view('livewire.categories.modal');
    }
}

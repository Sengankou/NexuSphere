<?php

namespace App\Livewire\Categories;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Show extends Component
{
    public Collection $category;

    public function mount(Collection $category)
    {
        $this->category = $category;
    }

    // このシナリオでは使われない
    public function render()
    {
        return view('livewire.categories.show');
    }
}

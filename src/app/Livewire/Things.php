<?php

namespace App\Livewire;

use Livewire\Component;

class Things extends Component
{
    public $things = [];

    public function mount()
    {
        $this->things = [
            ['id' => 1, 'name' => 'Thing 1'],
            ['id' => 2, 'name' => 'Thing 2'],
            ['id' => 3, 'name' => 'Thing 3'],
            ['id' => 4, 'name' => 'Thing 4'],
            ['id' => 5, 'name' => 'Thing 5'],
        ];
    }

    public function reorder($orderedIds){
        // dd($orderedIds);
        $this->things = collect($orderedIds)->map(function($id) {
            return collect($this->things)->where('id', (int) $id)->first();
        })->toArray();
    }

    public function render()
    {
        return view('livewire.things');
    }
}

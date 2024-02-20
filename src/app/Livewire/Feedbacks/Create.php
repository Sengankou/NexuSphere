<?php

namespace App\Livewire\Feedbacks;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required|string|max:2048')]
    public string $message = '';

    public function store(): void
    {
        $validated = $this->validate();

        // Store the feedback...
        auth()->user()->feedbacks()->create($validated);

        $this->message = '';

        $this->dispatch('feedbackStored');
    }

    public function render()
    {
        return view('livewire.feedbacks.create');
    }
}

<?php

namespace App\Livewire\Feedbacks;

use Livewire\Component;
use App\Models\Feedback;
use Livewire\Attributes\Validate;

class Edit extends Component
{
    public Feedback $feedback;

    #[Validate('required|string|max:2048')]
    public string $message = '';

    public function mount(): void
    {
        $this->message = $this->feedback->message;
    }

    public function update(): void
    {
        $this->authorize('update', $this->feedback);

        $validated = $this->validate();

        $this->feedback->update($validated);

        $this->dispatch('feedbackUpdated');
    }

    public function cancel(): void
    {
        $this->dispatch('feedbackEditCancelled');
    }

    public function render()
    {
        return view('livewire.feedbacks.edit');
    }
}

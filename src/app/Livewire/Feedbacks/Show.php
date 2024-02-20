<?php

namespace App\Livewire\Feedbacks;

use Livewire\Component;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;

class Show extends Component
{
    public Collection $feedbacks;

    public ?Feedback $editing = null;

    public function mount(): void
    {
        $this->feedbacks = Feedback::with('user')->latest()->get();
        Log::info('Feedbacks: ' . $this->feedbacks);
    }

    #[On('feedbackStored')]
    public function refreshFeedbacks(): void
    {
        $this->feedbacks = Feedback::with('user')->latest()->get();
    }

    public function edit(Feedback $feedback): void
    {
        $this->editing = $feedback;

        $this->refreshFeedbacks();
    }

    #[On('feedbackUpdated')]
    #[On('feedbackEditCancelled')]
    public function disabledEditing(): void
    {
        $this->editing = null;

        $this->refreshFeedbacks();
    }

    public function render()
    {
        return view('livewire.feedbacks.show');
    }
}

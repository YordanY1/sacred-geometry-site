<?php

namespace App\Livewire\Pages\Topics;

use App\Models\Topic;
use Livewire\Component;

class Show extends Component
{
    public Topic $topic;

    public function mount($slug)
    {
        $this->topic = Topic::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.pages.topics.show')
            ->layout('layouts.app')
            ->title($this->topic->title);
    }
}

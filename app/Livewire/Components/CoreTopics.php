<?php

namespace App\Livewire\Components;

use App\Models\Topic;
use Livewire\Component;


class CoreTopics extends Component
{
    public function render()
    {
        $topics = Topic::all();
        return view('livewire.components.core-topics', compact('topics'));
    }
}

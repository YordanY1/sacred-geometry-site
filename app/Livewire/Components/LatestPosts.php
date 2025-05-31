<?php

namespace App\Livewire\Components;

use App\Models\Post;
use Livewire\Component;

class LatestPosts extends Component
{
    public function render()
    {
        $latestPosts = Post::latest()->take(6)->get();

        return view('livewire.components.latest-posts', compact('latestPosts'));
    }
}

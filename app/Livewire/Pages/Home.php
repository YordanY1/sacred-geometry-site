<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Post;


class Home extends Component
{
    public $latestPosts;

    public function mount()
    {
        $this->latestPosts = Post::latest()->take(3)->get();
    }

    public function render()
    {
        return view('livewire.pages.home')->layout('layouts.app');
    }
}

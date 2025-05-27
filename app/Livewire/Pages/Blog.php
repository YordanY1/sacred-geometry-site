<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Post;


class Blog extends Component
{
    public $posts;


    public function mount()
    {
        $this->posts = Post::latest()->take(6)->get();
    }

    public function render()
    {
        return view('livewire.pages.blog')->layout('layouts.app');
    }
}

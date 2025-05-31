<?php

namespace App\Livewire\Pages;

use App\Models\GalleryImage;
use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        $images = GalleryImage::latest()->get();

        return view('livewire.pages.gallery', compact('images'))
            ->layout('layouts.app')
            ->title('Галерия');
    }
}

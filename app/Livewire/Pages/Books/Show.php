<?php

namespace App\Livewire\Pages\Books;

use App\Models\Book;
use Livewire\Component;

class Show extends Component
{
    public Book $book;

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function render()
    {
        return view('livewire.pages.books.show')->
            title($this->book->title)
            ->layout('layouts.app');
    }
}

<?php

namespace App\Livewire\Pages\Books;

use App\Models\Book;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $books = Book::latest()->get();

        return view('livewire.pages.books.index', compact('books'))
            ->title('Книги и Източници')
            ->layout('layouts.app');
    }
}

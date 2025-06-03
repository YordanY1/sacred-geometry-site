<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Post;
use App\Models\Course;
use App\Models\Book;

class Navbar extends Component
{
    public string $search = '';
    public array $results = [];

    public function updatedSearch(string $value): void
    {
        $this->results = [];

        if (strlen($value) < 2) return;

        $posts = Post::where('title', 'like', '%' . $value . '%')->limit(3)->get();
        $courses = Course::where('title', 'like', '%' . $value . '%')->limit(3)->get();
        $books = Book::where('title', 'like', '%' . $value . '%')->limit(3)->get();

        $this->results = [
            'Блог статии' => $posts,
            'Курсове' => $courses,
            'Книги' => $books,
        ];
    }

    public function clearSearch(): void
    {
        $this->search = '';
        $this->results = [];
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}

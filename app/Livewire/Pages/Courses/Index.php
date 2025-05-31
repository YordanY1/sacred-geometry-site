<?php

namespace App\Livewire\Pages\Courses;

use App\Models\Course;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $courses = Course::latest()->paginate(6);

        return view('livewire.pages.courses.index', compact('courses'))
            ->layout('layouts.app')
            ->title('Курсове');
    }
}

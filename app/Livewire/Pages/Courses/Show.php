<?php

namespace App\Livewire\Pages\Courses;

use App\Models\Course;
use Livewire\Component;

class Show extends Component
{
    public Course $course;

    public function mount(Course $course)
    {
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.pages.courses.show')
            ->layout('layouts.app')
            ->title($this->course->title);
    }
}

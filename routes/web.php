<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\BlogShow;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Topics\Show;
use App\Livewire\Pages\Courses\Index as CoursesIndex;
use App\Livewire\Pages\Courses\Show as CoursesShow;
use App\Livewire\Pages\Books\Index as BooksIndex;
use App\Livewire\Pages\Books\Show as BooksShow;
use App\Livewire\Pages\Gallery;



Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/blog/{post:slug}', BlogShow::class)->name('blog.show');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/topics/{slug}', Show::class)->name('topics.show');
Route::get('/courses', CoursesIndex::class)->name('courses.index');
Route::get('/courses/{course:slug}', CoursesShow::class)->name('courses.show');
Route::get('/books', BooksIndex::class)->name('books.index');
Route::get('/books/{book:slug}', BooksShow::class)->name('books.show');
Route::get('/gallery', Gallery::class)->name('gallery');

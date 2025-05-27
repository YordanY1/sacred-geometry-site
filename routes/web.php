<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\BlogShow;
use App\Livewire\Pages\Contact;


Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/blog/{post:slug}', BlogShow::class)->name('blog.show');
Route::get('/contact', Contact::class)->name('contact');


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    protected $guarded = ['id'];

    protected static function booted()
    {
        static::creating(function ($course) {
            $course->slug = Str::slug($course->title);
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Topic extends Model
{
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }


    protected static function booted(): void
    {
        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });

        static::updating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}

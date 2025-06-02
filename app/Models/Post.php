<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    protected $guarded = ['id'];

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
    
    public function postSection()
    {
        return $this->belongsTo(PostSection::class);
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

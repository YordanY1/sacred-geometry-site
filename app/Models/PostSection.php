<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostSection extends Model
{
    protected $guarded = ['id'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

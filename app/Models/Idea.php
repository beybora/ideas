<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at', 'likes'];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'idea_id', 'id');
    }
}

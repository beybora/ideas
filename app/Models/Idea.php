<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $fillable = ['user_id', 'content', 'like'];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'idea_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

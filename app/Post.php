<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'username',
        'title',
        'body',
        'email',
        'url',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
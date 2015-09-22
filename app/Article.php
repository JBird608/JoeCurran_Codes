<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'type',
        'title',
        'extract',
        'body',
        'slug',
        'tags',
        'location',
        'published'
    ];

    protected $dates = ['published'];
}

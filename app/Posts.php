<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
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
}

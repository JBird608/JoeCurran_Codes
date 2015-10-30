<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correspondence extends Model
{
    protected $fillable = [
        'name',
        'emails',
        'phone',
        'topic',
        'subject',
        'message'
    ];
}

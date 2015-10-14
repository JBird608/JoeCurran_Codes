<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{

    /**
     * This sets out what information can be added to the database
     * without any checking, does not include automatic data.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'title',
        'discription',
        'image',
        'twitter_card',
        'twitter_creater',
        'small_url',
        'og_type'
    ];
}

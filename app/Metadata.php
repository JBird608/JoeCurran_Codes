<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{

    /**
     * This sets out what information can be added to the database
     * without any checking, does not include automatic data.
     *
     * @var array
     */
    protected $fillable = [
        'page_code',
        'page_title',
        'page_discription',
        'page_image',
        'twitter_card',
        'twitter_creater',
        'small_url',
        'og_type'
    ];
}

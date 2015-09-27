<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * This sets out what information can be added to the database
     * without any checking, does not include automatic data.
     *
     * @var array
     */
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

    /**
     * Turns these dates feilds into an Carbon Instance.
     * This allows Carbon Interaction.
     *
     * @var array
     */
    protected $dates = ['published'];

    /**
     * Function for selecting only published articles.
     *
     * @param $query
     */
    public function scopePublished($query){
        $query->where('published', '<=', Carbon::now());
    }

    /**
     * Function for selecting only unpublished articles.
     *
     * @param $query
     */
    public function scopeUnpublished($query){
        $query->where('published', '>=', Carbon::now());
    }

    /**
     * Function for converting date from form into Carbon & Time,
     * before its saved in the database.
     *
     * @param $date
     */
    public function setPublishedAttribute($date){
        $this->attributes['published'] = Carbon::parse($date);
    }
}

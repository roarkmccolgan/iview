<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
        'domain',
        'subdomain',
        'language_id',
        'urlable_id',
        'urlable_type'
    ];

    /**
     * Get language of URL
     * @return [type] [description]
     */
    public function language()
    {
        return $this->belongsTo('App\Language');
    }

    /**
     * Get all of the owning models.
     */
    public function urlable()
    {
        return $this->morphTo();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
        'domain',
        'subdomain',
        'language_id',
        'iview_id'
    ];

    /**
     * Return iview that the URL belongs to
     * @return collection
     */
    public function iview()
    {
        return $this->belongsTo('App\iview');
    }

    /**
     * Get language of URL
     * @return [type] [description]
     */
    public function language()
    {
        return $this->hasOne('App\Language');
    }
}

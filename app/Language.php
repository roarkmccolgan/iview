<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * Get URL of Language.
     * @return [type] [description]
     */
    public function url()
    {
        return $this->hasMany(\App\Url::class);
    }

    /**
     * Get Tool of Language.
     * @return [type] [description]
     */
    public function tools()
    {
        return $this->hasMany(\App\Tool::class);
    }

    /**
     * Get Trackers of Language.
     * @return [type] [description]
     */
    public function trackers()
    {
        return $this->belongsToMany(\App\Tracker::class);
    }
}

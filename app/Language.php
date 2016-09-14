<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * Get URL of Language
     * @return [type] [description]
     */
    public function url()
    {
        return $this->hasMany('App\Url');
    }
}

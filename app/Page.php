<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function questions()
    {
        return $this->hasMany('App\Questions');
    }
    public function sections()
    {
        return $this->belongsTo('App\Section');
    }
}

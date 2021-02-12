<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function questions()
    {
        return $this->hasMany(\App\Questions::class);
    }

    public function sections()
    {
        return $this->belongsTo(\App\Section::class);
    }
}

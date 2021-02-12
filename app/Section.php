<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name',
        'alias',
        'class',
        'display',
    ];

    public function questions()
    {
        return $this->hasMany('App\Questions');
    }
}

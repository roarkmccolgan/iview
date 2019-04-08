<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [
        'question',
        'name',
        'type',
        'option_id'
    ];

    public function options()
    {
        return $this->hasMany('App\Options');
    }
}
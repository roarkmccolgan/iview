<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'logo', 'colours',
    ];

    public function iviews()
    {
        return $this->hasMany('App\Iview');
    }

    public function tools()
    {
        return $this->hasMany('App\Tool');
    }
}

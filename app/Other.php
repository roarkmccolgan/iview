<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    protected $fillable = [
        'label',
        'value',
        'placeholder'
    ];
    
    public function question()
    {
        return $this->belongsTo('App\questions')
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $fillable = [
        'label',
        'value',
        'checked',
    ];

    public function questions()
    {
        return $this->belongsTo('App\questions');
    }
}

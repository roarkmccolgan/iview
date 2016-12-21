<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $fillable = [
        'tool_id','name', 'email', 'code', 'views', 'completions','active','language_id'
    ];
    
    public function tool()
    {
        return $this->belongsTo('App\Tool');
    }

    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}

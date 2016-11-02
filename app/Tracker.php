<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $fillable = [
        'tool_id','name', 'email', 'code', 'views', 'completions','active'
    ];
    
    public function tool()
    {
        return $this->belongsTo('App\Tool');
    }
}

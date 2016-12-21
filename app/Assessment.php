<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'company','title', 'tel', 'score', 'rating', 'quiz', 'result', 'downloaded', 'extra'
    ];
    protected $casts = [
        'extra' => 'array',
        'quiz' => 'array',
        'result' => 'array'
    ];
    
    public function tool()
    {
        return $this->belongsTo('App\Tool');
    }
}

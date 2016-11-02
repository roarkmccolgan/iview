<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'company', 'tel', 'score', 'rating', 'quiz', 'result', 'downloaded'
    ];
    
    public function tool()
    {
        return $this->belongsTo('App\Tool');
    }
}

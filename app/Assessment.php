<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'company', 'tel', 'quiz', 'result'
    ];
    
    public function tool()
    {
        return $this->belongsTo('App\Tool');
    }
}

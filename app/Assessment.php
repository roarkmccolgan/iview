<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'company','title', 'tel', 'score', 'rating', 'quiz', 'result', 'downloaded', 'extra', 'fetched'
    ];
    protected $casts = [
        'extra' => 'array',
        'quiz' => 'array',
        'result' => 'array',
        'uuid' => 'string',
    ];
    
    public function tool()
    {
        return $this->belongsTo('App\Tool');
    }
}

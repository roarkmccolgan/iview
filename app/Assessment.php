<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assessment extends Model
{
    use SoftDeletes;

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

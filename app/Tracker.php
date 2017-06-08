<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $fillable = [
        'tool_id','name', 'email', 'code', 'views', 'completions','active','language_id'
    ];
    public $dateViews = 0;
    public $dateCompletions = 0;
    
    public function tool()
    {
        return $this->belongsTo('App\Tool');
    }

    public function language()
    {
        return $this->belongsTo('App\Language');
    }

    public function TrackerHits()
    {
        return $this->hasMany('App\TrackerHits');
    }

    public function getViews(){
        return $this->dateViews;
    }
    public function setViews($value){
        $this->dateViews = $value;
    }
    public function getCompletions(){
        return $this->dateCompletions;
    }
    public function setCompletions($value){
        $this->dateCompletions = $value;
    }
}

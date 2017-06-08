<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackerHits extends Model
{
    protected $fillable = [
		'tracker_id',
		'type'
	];

	public function tracker(){
		return $this->belongsTo('App\Tracker');
	}
}

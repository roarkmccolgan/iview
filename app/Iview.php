<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Iview extends Model {

	protected $fillable = [
		'name',
		'published_at',
		'active'
	];
	
	public function company()
    {
        return $this->belongsTo('App\Company');
    }

	public function notifications()
    {
        return $this->hasMany('App\Notification');
    }
}

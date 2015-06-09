<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {

	protected $fillable = [
		'name',
		'email'
	];
	
	public function iview()
	{
		return $this->belongsTo('App\Iview');
	}

}

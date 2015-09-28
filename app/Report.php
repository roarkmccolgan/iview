<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {

	protected $fillable = [
		'iview_id',
		'name',
		'database',
		'connection',
		'table',
		'ignore_fields'
	];
	
	public function iview()
	{
		return $this->belongsTo('App\Iview');
	}

	public function notifications()
	{
		return $this->hasMany('App\Notification');
	}
}

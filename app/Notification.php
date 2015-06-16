<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {

	protected $fillable = [
		'name',
		'email'
	];
	
	public function reportSetting()
	{
		return $this->belongsTo('App\ReportSetting');
	}
}

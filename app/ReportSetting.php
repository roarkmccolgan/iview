<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportSetting extends Model {

	protected $fillable = [
		'analytics_id',
		'url',
		'company',
		'title',
		'corpcolor',
	];
	
	public function iview()
	{
		return $this->belongsTo('App\Iview');
	}
}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Iview extends Model {

	protected $fillable = [
		'name',
		'published_at',
		'active'
	];
	
	public function notifications()
    {
        return $this->hasMany('App\Notification');
    }
	
	public function reportsettings()
    {
        return $this->hasMany('App\ReportSetting');
    }
}

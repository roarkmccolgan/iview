<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $fillable = [
		'name', 'logo'
	];

	public function iviews(){
		return $this->hasMany('App\Iview');
	}
}

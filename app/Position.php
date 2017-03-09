<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	protected $fillable = [
		'label',
	]
	public function option(){
		return this->belongsTo('App\Options')
	}
}

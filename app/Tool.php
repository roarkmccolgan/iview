<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = [
		'title',
		'alias',
		'sub_title',
		'gapropertyid',
		'company_id',
		'template_id',
		'start_date',
		'end_date'
	];

	protected $dates = ['start_date'];

	public function company()
    {
        return $this->belongsTo('App\Company');
    }

	public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function assessments()
    {
        return $this->hasMany('App\Assessment')->select(['id','tool_id','fname','lname','email','company','country','tel','referer','code','score','rating','result','created_at']);
    }

    public function trackers()
    {
        return $this->hasMany('App\Tracker');
    }

    public function urls()
    {
        return $this->morphMany('App\Url', 'urlable');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}

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
        return $this->hasMany('App\Assessment');
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

    public function extra_fields()
    {
        return $this->hasMany('App\ExtraFields');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }
    public function sections()
    {
        return $this->hasMany('App\Section');
    }
}

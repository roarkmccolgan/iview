<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iview extends Model
{
    protected $fillable = [
        'title',
        'alias',
        'sub_title',
        'gapropertyid',
        'company_id',
        'template_id',
        'start_date',
        'end_date',
    ];

    protected $dates = ['start_date'];

    public function company()
    {
        return $this->belongsTo(\App\Company::class);
    }

    public function reports()
    {
        return $this->hasMany(\App\Report::class);
    }

    public function urls()
    {
        return $this->morphMany(\App\Url::class, 'urlable');
    }

    public function user()
    {
        return $this->belongsToMany(\App\User::class);
    }
}

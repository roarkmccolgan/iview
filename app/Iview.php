<?php namespace App;

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

    public function urls()
    {
        return $this->hasMany('App\Url');
    }
}

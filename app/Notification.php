<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    protected $fillable = [
        'report_id',
        'name',
        'email',
        'language'
    ];
    /**
     * Repurn report settings that own this notification
     * @return [type] [description]
     */
    public function reportSetting()
    {
        return $this->belongsTo('App\ReportSetting');
    }
}

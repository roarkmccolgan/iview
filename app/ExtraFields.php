<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraFields extends Model
{
    protected $table = 'extra_fields';

    protected $casts = [
        'options' => 'array',
    ];

    protected $fillable = [
        'assessment_id',
        'name',
        'type',
        'trans',
        'error',
        'options',
        'required',
        'order',
    ];

    /**
     * Repurn report settings that own this notification.
     * @return [type] [description]
     */
    public function tool()
    {
        return $this->belongsTo(\App\Tool::class);
    }
}

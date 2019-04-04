<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product'
    ];
    /**
     * Get all of the owning photo models.
     */
    public function productable()
    {
        return $this->morphTo();
    }
}

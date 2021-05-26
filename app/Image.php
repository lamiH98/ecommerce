<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guard = 'admin';

    protected $fillable = [
        'path', 'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}

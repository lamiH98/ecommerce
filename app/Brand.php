<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guard = 'admin';

    protected $fillable = [
        'brand', 'brand_ar', 'image'
    ];
}

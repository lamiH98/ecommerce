<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $guard = 'admin';

    protected $fillable = [
        'size', 'size_ar'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guard = 'admin';

    protected $fillable = [
        'title', 'subtitle', 'title_ar', 'subtitle_ar', 'image'
    ];
}

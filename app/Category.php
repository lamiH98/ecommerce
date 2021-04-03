<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guard = 'admin';

    protected $fillable = [
        'name', 'image', 'name_ar', 'parent_id'
    ];

    public function products() {
        return $this->hasMany('App\Product', 'category_id', 'id');
    }

    public function subcategory(){
        return $this->hasMany('App\Category', 'parent_id');
    }

}

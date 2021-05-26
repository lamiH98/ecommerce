<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guard = 'admin';

    protected $fillable = [
        'name', 'name_ar','image', 'price', 'quantity', 'category_id', 'details', 'price_offer','product_new', 'brand_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id', 'id');
    }

    public function colors()
    {
        return $this->belongsToMany('App\Color', 'product_color', 'product_id', 'color_id');
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Size', 'product_size', 'product_id', 'size_id');
    }

    public function images() {
        return $this->hasMany('App\Image', 'product_id', 'id');
    }

    public function reviews() {
        return $this->hasMany('App\Review', 'product_id', 'id');
    }

    // public function orders() {
    //     return $this->belongsToMany('App\Order', 'order_products', 'product_id', 'order_id');
    // }
}

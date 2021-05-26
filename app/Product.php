<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guard = 'admin';

    protected $fillable = [
<<<<<<< HEAD
        'name', 'name_ar','image', 'price', 'quantity', 'category_id', 'details', 'price_offer','product_new', 'brand_id'
=======
        'name', 'name_ar','image', 'price', 'quantity', 'category_id', 'details', 'price_offer','product_new'
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

<<<<<<< HEAD
    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id', 'id');
    }

=======
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
    public function colors()
    {
        return $this->belongsToMany('App\Color', 'product_color', 'product_id', 'color_id');
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Size', 'product_size', 'product_id', 'size_id');
    }

<<<<<<< HEAD
=======
    public function brands()
    {
        return $this->belongsToMany('App\Brand', 'product_brand', 'product_id', 'brand_id');
    }

>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
    public function images() {
        return $this->hasMany('App\Image', 'product_id', 'id');
    }

<<<<<<< HEAD
    public function reviews() {
        return $this->hasMany('App\Review', 'product_id', 'id');
    }

=======
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
    // public function orders() {
    //     return $this->belongsToMany('App\Order', 'order_products', 'product_id', 'order_id');
    // }
}

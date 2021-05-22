<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'name', 'email', 'city', 'neighourhood', 'street', 'phone', 'discount',
        'discount_code', 'newTotal', 'total', 'error', 'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function products() {
        return $this->belongsToMany('App\Product', 'order_products', 'order_id', 'product_id');
    }
}

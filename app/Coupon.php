<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $guard = 'admin';

    protected $fillable = [
        'code', 'type', 'value', 'percent_off'
    ];

    public static function findByCode($code) {
        // Coupon::findByCode('');
        return self::where('code', $code)->first();
    }

    public function discount($total) {
        if($this->type == 'fixed') {
            return $this->value;
        } elseif ($this->type == 'percent') {
            return round(($this->percent_off / 100) * $total);
        } else {
            return 0;
        }
    }

}

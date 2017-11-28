<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //relations
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function status(){
        return $this->belongsTo('App\OrderStatus', 'order_status_id');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }
}

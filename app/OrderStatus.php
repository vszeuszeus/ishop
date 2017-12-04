<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    //properties
    protected $guarded = [];
    protected $table = 'order_statuses';

    //relations
    public function orders(){
        return $this->hasMany('App\Order', 'order_status_id');
    }
}

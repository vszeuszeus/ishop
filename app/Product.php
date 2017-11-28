<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //properties
    protected $guarded = [];

    //relations
    public function manager(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function group(){
        return $this->belongsTo('App\ProductGroup', 'product_group_id');
    }

    public function status(){
        return $this->belongsTo('App\ProductStatus','product_status_id');
    }

    public function photos(){
        return $this->morphMany('App\Photo', 'photable');
    }

    //methods
}

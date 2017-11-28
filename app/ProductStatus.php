<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    //properties
    protected $guarded = [];
    protected $table = 'product_statuses';

    //relations
    public function products(){
        return $this->hasMany('App\Product','product_status_id');
    }
}

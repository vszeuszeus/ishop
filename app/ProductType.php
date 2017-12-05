<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //properties
    protected $table = 'product_types';
    protected $guarded = [];

    //relations
    public function products(){
        return $this->hasMany('App\Product');
    }
}

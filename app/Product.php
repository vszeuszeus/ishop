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

    public function type(){
        return $this->belongsTo('App\ProductType', 'product_type_id');
    }

    public function photos(){
        return $this->morphMany('App\Photo', 'photable');
    }



    //methods

    public function storePhoto($file)
    {
        return 'storage/'.substr($file->store('public/upload/products/'.$this->id), 7);
    }

    public function deletePhoto($id)
    {
        Storage::delete('public'.substr($this->photo_path, 7));

    }
}

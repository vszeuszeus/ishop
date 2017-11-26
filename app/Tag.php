<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function productGroups(){
        return $this->morphedByMany('App\ProductGroup', 'taggable');
    }


}

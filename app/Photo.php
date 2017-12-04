<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //properties
    protected $guarded = [];

    //relations
    public function photable(){
        return $this->morphTo();
    }
}

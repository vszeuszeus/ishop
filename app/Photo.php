<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    //properties
    protected $guarded = [];

    //relations
    public function photable()
    {
        return $this->morphTo();
    }


    //methods
    public function deleteByPath()
    {
        return Storage::delete('public'.substr($this->path, 7));
    }


    //events

}

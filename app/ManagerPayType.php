<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagerPayType extends Model
{
    protected $table = 'manager_pay_types';

    protected $guarded = [];

    public function productGroups(){
        return $this->hasMany('App\ProductGroup');
    }
}

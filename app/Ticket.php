<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    //relations
    public function user(){
        return $this->belongsTo('App\User');
    }

}

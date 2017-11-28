<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //properties
    protected $guarded = [];

    //relations
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function status(){
        return $this->belongsTo('App\TicketStatus', 'ticket_status_id');
    }

    public function manager(){
        return $this->belongsTo('App\User', 'manager_id');
    }

    public function order(){
        return $this->belongsTo('App\Order');
    }

    //methods

}

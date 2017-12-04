<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    //properties
    protected $guarded = [];
    protected $table = 'ticket_statuses';

    //relations
    public function tickets(){
        $this->hasMany('App\Tickets', 'ticket_status_id');
    }
}

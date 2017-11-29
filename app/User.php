<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'login', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function scopeManagers($query)
    {
        return $query->whereHas('roles' , function ($q) {
            $q->where('name', 'manager');
        });
    }

    public function scopeWithProblemTicketsCount($query){
        return $query->withCount(['tickets' => function($q){
            $q->whereIn('ticket_status_id', [2,3]);
        }]);
    }

    public function scopeWithEndedOrdersCount($query){
        return $query->withCount(['orders' => function($q){
            $q->where('order_status_id', 4);
        }]);
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function tickets(){
        return $this->hasMany('App\Ticket');
    }







}

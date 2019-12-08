<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestedServices extends Model
{
protected $fillable = [
        'user_id',
        'service_name',
        'time',
        'message',
        'address',
        'hear_about_us',
        'assigned_by_admin',
        'status',
        'rate'
       

    ];

    public function user(){
        return $this->belongsTo('App\Customer');
    }

    public function employee(){
        return $this->belongsTo('App\Employee');
    }

    public function requested_service(){
        return $this->hasMany('App\RequestedServices');
    }
}

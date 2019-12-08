<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    protected $guard = 'customer';
    protected $fillable = [
        'fname',
        'email',
        'password',
        'address',
        'phone',
        'service_id',
    ];
    public function package(){
        return $this->hasMany('App\CustomerPackage');
    }
    

}



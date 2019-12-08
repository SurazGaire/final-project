<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Employee extends Authenticatable
{

    protected $guard = 'employee';
    protected $fillable = [
        'fname',
        'email',
        'phone',
        'added_by_admin',
        'address',
        'image',
        'service',
        'status',
        'verified',
        'password',

    ];
}

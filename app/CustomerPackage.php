<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerPackage extends Model
{
    protected $fillable = [
        'customer_id',
        'service_id',
        'package_name',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeDesc extends Model
{
   protected $fillable=
   [
       'weekdays',
       'weekends',
       'weekdays_time',
       'weekends_time',
   ];

   
}

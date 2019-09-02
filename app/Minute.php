<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minute extends Model
{
   protected $table = 'minutes';
   protected $fillable = ['date','time','day','location','calledby','purpose','agender','points','conclusion','signed','pre_title','pre_name'];
}

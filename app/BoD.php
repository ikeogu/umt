<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoD extends Model
{
    protected $fillable = [
        'name','position','department','passport',
    ];
}

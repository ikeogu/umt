<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traning extends Model
{
    protected $fillable = [
        'name', 'link', 'description',
    ];
}

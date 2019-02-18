<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mgtTeam extends Model
{
    protected $fillable = [
        'name','position','department','passport','wok',
    ];
}

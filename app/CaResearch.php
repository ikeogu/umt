<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaResearch extends Model
{
    protected $fillable = [
        'name', 'body', 'author', 'passport','coauthor',
    ];
}

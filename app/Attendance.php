<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendances';
    protected $fillable = ['date','time','venue','moderators'];

    public function attend(){
        return $this->hasMany(Attendee::class);
    }
}

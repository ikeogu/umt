<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $table = 'attendees';
    protected $fillable = ['name','dept','level','phone','osmusername'];

    public function attendby(){
        return $this->belongTo(Attendance::class);
    }
}

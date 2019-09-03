<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    
    protected $fillable=[
        'reference','amount','user_id','gateway_response','customer_code','bank','paid_at','status','member_dept','customer_name','customer_email'
    ];


    public function userpay(){
     return $this->belongsTo(User::class);
    }

    
}

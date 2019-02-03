<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempOrder extends Model
{
    protected $table = 'temp_order';
    protected $fillable = [
        'name','u_id','price','total','bank','email','phone_no',
    ];
}

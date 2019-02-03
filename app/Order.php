<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'name','u_id','price','total','bank','email','phone_no','users_name','amount','Trx_no','status','account_no','created_at',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferpoint extends Model
{
    protected $table = 'tbl_transferpoint';
    protected $fillable = ['customerId','pay_point','created_at','updated_at', 'currentStatus']; 
    public $timestamps = false;
}

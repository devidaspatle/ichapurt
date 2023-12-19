<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fundrequest extends Model
{
    protected $table = 'tbl_fundrequests';
    protected $fillable = ['customerId','point','pay_point','created_at','updated_at', 'currentStatus']; 
    public $timestamps = false;
}

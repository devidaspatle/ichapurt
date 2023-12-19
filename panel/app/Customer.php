<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'tbl_customer';
    protected $fillable = ['name','mobile','emailid','password','userid','created_at','currentStatus','custpmerid']; 
    public $timestamps = false;
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'tab_vendor';
    protected $fillable = ['id','vendor_name','mobile','email','country','state','city','address','currentStatus']; 
    public $timestamps = false;
}

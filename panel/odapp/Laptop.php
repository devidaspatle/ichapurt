<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table = 'tbl_laptop';
    protected $fillable = ['id','asset_code','make','model','serial_number','processor','ram','hdd','txtcondition','created_at','status']; 
    public $timestamps = false;
}

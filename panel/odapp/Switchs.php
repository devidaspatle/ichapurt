<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Switchs extends Model

{
    protected $table = 'tbl_switch';
    protected $fillable = ['id','asset_code','make','model','serial_number','noofport',
    'txtcondition','created_at','status'];
    public $timestamps = false;
}

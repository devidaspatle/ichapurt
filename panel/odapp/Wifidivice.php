<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wifidivice extends Model
{
    protected $table = 'tbl_wifidivice';
    protected $fillable = ['id','asset_code','make','model','serial_number','txtcondition','created_at','status']; 
    public $timestamps = false;
}

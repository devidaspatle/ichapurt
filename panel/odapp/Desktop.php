<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desktop extends Model
{
    protected $table = 'tbl_desktop';
    protected $fillable = ['id','asset_code','make','model','serial_number','processor','ram','hdd','txtcondition','created_at','status']; 
    public $timestamps = false;
}

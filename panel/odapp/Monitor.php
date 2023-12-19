<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $table = 'tbl_moniter';
    protected $fillable = ['id','asset_code','make','model','serial_number','screen_size','txtcondition','created_at','status']; 
    public $timestamps = false;
}

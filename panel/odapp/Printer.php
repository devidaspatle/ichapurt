<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $table = 'tbl_printer';
    protected $fillable = ['id','asset_code','make','model','serial_number','printer_type','txtcondition','created_at','status']; 
    public $timestamps = false;
}

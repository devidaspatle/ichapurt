<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scanner extends Model
{
    protected $table = 'tbl_scanner';
    protected $fillable = ['id','asset_code','make','model','serial_number','scanner_type','txtcondition','created_at','status']; 
    public $timestamps = false;
}

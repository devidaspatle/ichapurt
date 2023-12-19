<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rfdivice extends Model
{
    protected $table = 'tbl_rfdivice';
    protected $fillable = ['id','asset_code','make','model','serial_number','txtcondition','created_at','status']; 
    public $timestamps = false;
}

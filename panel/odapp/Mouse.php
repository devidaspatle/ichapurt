<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mouse extends Model
{
    protected $table = 'tbl_mouse';
    protected $fillable = ['id','asset_code','make','model','serial_number','txtcondition','created_at','status']; 
    public $timestamps = false;
}

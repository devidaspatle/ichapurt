<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    protected $table = 'tbl_keyboard';
    protected $fillable = ['id','asset_code','make','model','serial_number','txtcondition','created_at','status']; 
    public $timestamps = false;
}

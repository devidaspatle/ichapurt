<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headphone extends Model
{
    protected $table = 'tbl_headphone';
    protected $fillable = ['id','asset_code','make','model','serial_number','txtcondition','created_at','status']; 
    public $timestamps = false;
}
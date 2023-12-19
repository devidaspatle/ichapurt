<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webcam extends Model
{
    protected $table = 'tbl_webcam';
    protected $fillable = ['id','asset_code','make','model','serial_number','txtcondition','created_at','status']; 
    public $timestamps = false;
}

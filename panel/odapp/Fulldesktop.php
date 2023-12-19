<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fulldesktop extends Model
{
    protected $table = 'tab_fulldesktops';
    protected $fillable = ['id','asset_code','cpu_serial_number','monitor_serial_number','mouse_serial_number','keyboard_serial_number','txtcondition','created_at','status']; 
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'tbl_state';
    protected $fillable = ['id','state_name','con_id']; 
    public $timestamps = false;
}

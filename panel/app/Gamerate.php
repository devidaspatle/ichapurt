<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamerate extends Model
{
     protected $table = 'tbl_gamerates';
    protected $fillable = ['id','gamename','rates']; 
    public $timestamps = false;
}

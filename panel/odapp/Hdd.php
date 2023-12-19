<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hdd extends Model
{
    protected $table = 'tbl_hdds';
    protected $fillable = ['id','name','created_at','updated_at']; 
    public $timestamps = false;
}

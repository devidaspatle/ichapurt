<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    protected $table = 'tbl_rams';
    protected $fillable = ['id','name','created_at','updated_at']; 
    public $timestamps = false;
}

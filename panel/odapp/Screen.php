<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    protected $table = 'tbl_screens';
    protected $fillable = ['id','name','created_at','updated_at']; 
    public $timestamps = false;
}

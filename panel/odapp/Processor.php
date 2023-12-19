<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    protected $table = 'tbl_processors';
    protected $fillable = ['id','name','created_at','updated_at']; 
    public $timestamps = false;
}

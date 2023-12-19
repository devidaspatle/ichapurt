<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $table = 'tbl_slots';
    protected $fillable = ['id','name','created_at','updated_at']; 
    public $timestamps = false;
}

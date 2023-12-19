<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $table = 'tab_campus';
    protected $fillable = ['id','name','abbr','location_id']; 
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'tab_location';
    protected $fillable = ['id','name']; 
    public $timestamps = false;
}

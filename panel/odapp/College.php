<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'tab_college';
    protected $fillable = ['id','name','abbr','campus_id']; 
    public $timestamps = false;
}

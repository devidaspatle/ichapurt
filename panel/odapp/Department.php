<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'tab_department';
    protected $fillable = ['id','name']; 
    public $timestamps = false;
}

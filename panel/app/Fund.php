<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    protected $table = 'tbl_funds';
    protected $fillable = ['id','customerid','point']; 
    public $timestamps = false;
}

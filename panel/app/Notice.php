<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'tbl_notice';
    protected $fillable = ['id','title','description']; 
    public $timestamps = false;
}

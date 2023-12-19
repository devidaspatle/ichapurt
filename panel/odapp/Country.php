<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'tbl_country';
    protected $fillable = ['con_id','phone_code','con_name','iso']; 
    public $timestamps = false;
}

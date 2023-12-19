<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidhistory extends Model
{
    protected $table = 'tab_bidhistorys';
    protected $fillable = ['id','customerid','start_date','end_date']; 
    public $timestamps = false;
}

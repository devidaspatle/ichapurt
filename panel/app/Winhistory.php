<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winhistory extends Model
{
    protected $table = 'tab_winhistorys';
    protected $fillable = ['id','customerid','start_date','end_date']; 
    public $timestamps = false;
}

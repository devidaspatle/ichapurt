<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walletsbal extends Model
{
    protected $table = 'tbl_walletsbals';
    protected $fillable = ['id','customerId','point','point_bal']; 
    public $timestamps = false;
}

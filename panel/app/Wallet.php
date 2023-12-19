<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = 'tab_wallets';
    protected $fillable = ['id','name']; 
    public $timestamps = false;
}

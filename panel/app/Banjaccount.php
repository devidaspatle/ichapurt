<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Banjaccount extends Model
{
    protected $table = 'tab_bankdetails';
    protected $fillable = ['id','customerid','accountno','bankname','ifsc_code','acholder','paytmno','googlepayno','phonepayno']; 
    public $timestamps = false;
}

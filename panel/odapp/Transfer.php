<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $table = 'tbl_product_transfer';
    protected $fillable = ['id','asset_code','productid','serial_number','transfer_date','comment','currentStatus']; 
    public $timestamps = false;
}

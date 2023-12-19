<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storeproduct extends Model
{
    protected $table = 'tbl_store_product';
    protected $fillable = ['id','labname','asset_type','make','model','serial_number','processor','ram','hdd','screen_size','slot','power_backup','vendor','purchase_date','warranty','comment','status']; 
    public $timestamps = false;
}

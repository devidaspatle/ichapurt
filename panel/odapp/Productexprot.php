<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productexprot extends Model
{
    protected $table = 'tbl_export_product_format';
    protected $fillable = ['id','labname','asset_type','make','model','serial_number','processor','ram','hdd','screen_size','slot','power_backup','vendor','purchase_date','warranty','status','comment']; 
    public $timestamps = false;
}

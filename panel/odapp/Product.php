<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_product';
    protected $fillable = ['id','productId','asset_code','location','campus','office','department','employee','employeeid','issuancedate','asset_type','located_at','exact_location','make','model','serial_number','processor','ram','hdd','screen_size','slot',
    'power_backup','vendor','purchase_date','warranty','monitor_code','keyboard_code','mouse_code','amc','pro_condition','comment']; 
    public $timestamps = false;
}
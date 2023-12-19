<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mattakaresult extends Model
{
    protected $table = 'tab_results';
    protected $fillable = ['id','category_name','category_code','single_akata','jodi','double_pati','mattaka_number','mattaka_time','user','currentStatus','created_at','updated_at']; 
    public $timestamps = false;
}
	
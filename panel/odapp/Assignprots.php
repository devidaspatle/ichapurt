<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignprots extends Model
{
    protected $table = 'tab_assignprot';
    protected $fillable = ['id','name','asset_id','associate_asset_id','currentStatus']; 
    public $timestamps = false;
}

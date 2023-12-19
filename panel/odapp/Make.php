<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    protected $table = 'tab_make';
    protected $fillable = ['id','name','asset_id','associate_asset_id','currentStatus']; 
    public $timestamps = false;
}

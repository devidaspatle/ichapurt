<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'tab_asset';
    protected $fillable = ['id','name','created_at','updated_at']; 
    public $timestamps = false;
}

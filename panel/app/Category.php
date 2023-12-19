<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['id','catName','catTime','catoutTime','catNumber','created_at','currentStatus']; 
    public $timestamps = false;
}

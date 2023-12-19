<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modeles extends Model
{
    protected $table = 'tab_model';
    protected $fillable = ['id','make','model']; 
    public $timestamps = false;
}

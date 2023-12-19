<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jodichart extends Model
{
    protected $table = 'tbl_jodi_chart';
    protected $fillable = ['mattka_type', 'mond', 'tuesd', 'wedn', 'thusd', 'frid', 'satus', 'mattaka_date', 'currentStatus'];
    public $timestamps = false;
}

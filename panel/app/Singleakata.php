<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singleakata extends Model
{
    protected $table = 'tbl_singleakata';
    protected $fillable =['customerId','category_name','akata01' ,'akata02' ,'akata03' ,'akata04' ,'akata05' ,'akata06' ,'akata07' ,'akata08' ,'akata09' ,'akata10', 'created_at'];
    public $timestamps ='false';
}

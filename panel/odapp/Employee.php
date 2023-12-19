<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'tab_employee';
    protected $fillable = ['id','fullname','employee_code','mobile','email','date_of_birth','city','department_id','office','comment','currentStatus']; 
    public $timestamps = false;
}
<?php

namespace App\Imports;

use App\Monitor;
use Maatwebsite\Excel\Concerns\ToModel;

class MonitorImport implements ToModel
{
   
    public function model(array $row)
    {
        
        return new Monitor([
            'Asset Code' => 'MONI'.''.rand(100000,999999),
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'screen_size'  =>  $row[3],
            'txtcondition' => $row[4],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}

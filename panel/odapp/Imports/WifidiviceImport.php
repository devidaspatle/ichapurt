<?php

namespace App\Imports;

use App\Wifidivice;
use Maatwebsite\Excel\Concerns\ToModel;

class WifidiviceImport implements ToModel
{
   
    public function model(array $row)
    {
       
        return new Wifidivice([
            'asset_code' =>'WIFI'.''.rand(100000,999999),
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'txtcondition' => $row[3],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}

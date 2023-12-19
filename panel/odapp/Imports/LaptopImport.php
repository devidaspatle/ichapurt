<?php

namespace App\Imports;

use App\Laptop;
use Maatwebsite\Excel\Concerns\ToModel;

class LaptopImport implements ToModel
{
    
    public function model(array $row)
    {
       // $asset_code = 'LAPT'.''.rand(100000,999999);
        return new Laptop([
            'asset_code' => 'LAPT'.''.rand(100000,999999),
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'processor' => $row[3],
            'ram' => $row[4],
            'hdd' => $row[5],
            'optane' => $row[6],
            'txtcondition' => $row[7],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}

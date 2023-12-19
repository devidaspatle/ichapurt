<?php

namespace App\Imports;

use App\Scanner;
use Maatwebsite\Excel\Concerns\ToModel;

class ScannerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       
        return new Scanner([
             'asset_code' => 'SCAN'.''.rand(100000,999999),
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'scanner_type' => $row[3],
            'txtcondition' => $row[4],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}

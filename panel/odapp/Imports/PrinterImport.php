<?php

namespace App\Imports;

use App\Printer;
use Maatwebsite\Excel\Concerns\ToModel;

class PrinterImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $asset_code = 'PRIN'.''.rand(100000,999999);
        return new Printer([
            'Asset Code' => $asset_code,
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'printer_type'  => $row[3],
            'txtcondition' => $row[4],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}

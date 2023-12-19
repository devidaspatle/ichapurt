<?php

namespace App\Imports;

use App\Desktop;
use Maatwebsite\Excel\Concerns\ToModel;

class DesktopImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $asset_code = 'DESK'.''.rand(100000,999999);
        return new Desktop([
            'Asset Code' => $asset_code,
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'processor' => $row[3],
            'ram' => $row[4],
            'hdd' => $row[5],
            'txtcondition' => $row[6],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}
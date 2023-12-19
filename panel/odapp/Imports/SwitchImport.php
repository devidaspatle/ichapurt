<?php

namespace App\Imports;

use App\Switchs;
use Maatwebsite\Excel\Concerns\ToModel;

class SwitchImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Switchs([
            'asset_code' => 'SWIT'.''.rand(100000,999999),
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'noofport'  => $row[3],
            'txtcondition' => $row[4],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}

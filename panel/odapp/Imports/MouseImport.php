<?php

namespace App\Imports;

use App\Mouse;
use Maatwebsite\Excel\Concerns\ToModel;

class MouseImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Mouse([
            'Asset Code' => 'MOUS'.''.rand(100000,999999),
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'txtcondition' => $row[3],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}

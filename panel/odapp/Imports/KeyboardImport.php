<?php

namespace App\Imports;

use App\Keyboard;
use Maatwebsite\Excel\Concerns\ToModel;

class KeyboardImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $asset_code = 'KEYB'.''.rand(100000,999999);
        return new Keyboard([
            'Asset Code' => $asset_code,
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'txtcondition' => $row[3],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}

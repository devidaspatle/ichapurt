<?php

namespace App\Imports;

use App\Headphone;
use Maatwebsite\Excel\Concerns\ToModel;

class HeadphoneImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       
        return new Headphone([
            'Asset Code' => 'HEAD'.''.rand(100000,999999),
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' =>000,
            'txtcondition' => $row[3],
            'created_at' => now(),
            'status' => 'Y'? 1:0
            //
        ]);
    }
}

<?php

namespace App\Imports;

use App\Projector;
use Maatwebsite\Excel\Concerns\ToModel;

class ProjectorImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       
        return new Projector([
            'asset_code' => 'PROJ'.''.rand(100000,999999),
            'make' => $row[0],
            'model' => $row[1],
            'serial_number' => $row[2],
            'txtcondition' => $row[3],
            'created_at' => now(),
            'status' => 'Y'? 1:0
        ]);
    }
}

<?php
namespace App\Imports;

use App\Fulldesktop;
use Maatwebsite\Excel\Concerns\ToModel;

class FulldesktopImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       
        return new Fulldesktop([
            'Asset Code' => 'DESK'.''.rand(100000,999999),
            'cpu_serial_number' => $row[0],
            'monitor_serial_number' => $row[1],
            'keyboard_serial_number' =>$row[2],
            'mouse_serial_number' => $row[3],
            'txtcondition' => $row[4],
            'created_at' => now(),
            'status' => 'Y'? 1:0
            //
        ]);
    }
}
